<?php

namespace BlogBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Comments;
use AppBundle\Entity\FosUser;
use AppBundle\Entity\PostLike;
use BlogBundle\Form\BlogpostsType;
use BlogBundle\Form\CommentsType;
use BlogBundle\Form\AdvertType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Blogposts;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Repository\BlogPostsRepository;
use Symfony\Component\Form\AbstractType;


class BlogPostsController extends Controller
{
    public function AddBlogPostAction(Request $request)
    {//creer un objet vide
        $Blogposts=new Blogposts();
        $D=new \DateTime();
        //form
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $em->flush();
            return $this->redirectToRoute('blog_homepage');

        }
        //envoi form
        return $this->render('@Blog/BlogViews/AddBlogPost.html.twig',array('form'=>$form->createView()));



    }
    public function listAction(Request $request)
    {$Blogposts=new Blogposts();
        $D=new \DateTime();
        //form
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $file=$Blogposts->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$fileName);
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $Blogposts->setImage($fileName);
            $Blogposts->setPostLikesCount(0);
            $em->flush();
            return $this->redirect($request->getUri());

        }
        //envoi form

        $db = $this->getDoctrine()->getManager();

        $listUser = $db->getRepository('AppBundle:Blogposts')->findByPage(
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@Blog/BlogViews/Blog.html.twig', array('v' => $listUser,'form'=>$form->createView()));




    }
    public function DeleteAction($postId)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Blogposts::class)->find($postId);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute('blog_ListPosts');


    }
    public function DetailPostAction($postId,Request $request)
    { $db = $this->getDoctrine()->getManager();
    $b=new Blogposts();
    $b->setPostId($postId);

        $listUser = $db->getRepository('AppBundle:Blogposts')->find($postId);
        $listcom=$db->getRepository('AppBundle:Comments')->findBy(['commentPostId' => $postId]);

        $Comment=new Comments();
        $D=new \DateTime();
        //form
        $form=$this->createForm(CommentsType::class,$Comment);
        $form=$form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $Comment->setCommentAuthor($user);
            $Comment->setCommentDate($D);
            $Comment->setCommentPostId($b);
            $em->getRepository('AppBundle:Blogposts')-> ComsCountAdd($postId);

            $em->merge($Comment);


            $em->flush();
            return $this->redirect($request->getUri());


        }
        //envoi form
        return $this->render('@Blog/BlogViews/DetailBlog.html.twig',array('form'=>$form->createView(),'v' => $listUser,'com'=>$listcom));
    }

        public function updateAction($postId,Request $request)
    {
        $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);
        //form
        $B=new Blogposts();
        $D=new \DateTime();
        $Blogposts->setImage(null);
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $file=$Blogposts->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$fileName);
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $Blogposts->setImage($fileName);
            $em->flush();
            return $this->redirectToRoute('blog_ListPosts');

        }

        return $this->render('@Blog/BlogViews/UpdateBlogPost.html.twig',array('form'=>$form->createView()));

    }
    public function LikeAction($id,Request $request,$postId)

    {

        $like1=new PostLike();
        $user=new FosUser();
        $em=$this->getDoctrine()->getManager();


        $like=$this->getDoctrine()->getRepository(PostLike::class)->findOneBy(['post' => $postId,'author'=>$id]);

        if($like==null)
        {
            $em->getRepository('AppBundle:Blogposts')-> LikeCountAdd($postId);

            $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $like1->setAuthor($user);

            $like1->setPost($Blogposts);


            $em->persist($like1);
            $em->flush();



        }
        elseif($like!=null)
        {

            $em->remove($like);
            $em->getRepository('AppBundle:Blogposts')-> LikeCountReduce($postId);
            $em->flush();




        }
        $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);

        return $this->json([
            'code'=>200,
            'message'=>'supp',
            'likes'=>$Blogposts->getPostLikesCount()
        ],200);



    }
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('AppBundle:Blogposts')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "rien trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities(Blogposts $entities){

        foreach ($entities as $entity){
            $realEntities[$entities->getPostId()] = $entity->getFoo();
        }
        return $realEntities;
    }

}
