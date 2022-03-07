<?php

namespace App\Controller;

use App\Entity\Contract;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;



class HomeController extends AbstractController
{

    public function index(): Response
    {
        $title = 'Home-Signaturit';
        $content_title = 'What would you like to do?';
        $content_description = 'PLANTEAMIENTO INICIAL : ';
        return $this->render('home/index.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description
        ]);
    }

    public function winner(Request $request): Response
    {
        $title = 'Who wins the trial?';
        $content_title = 'Calculate which part will win';
        $content_description = 'Enter the signatures of each of the two contracts and calculate who will win the trial.';
        $length_constraint = new Length(array('min'=> 2, 'max' => 3));
        $regex_constraint = new Regex('/[knvKNV#]{1}[knvKNV#]{1}(?![a-jA-JÀ-ÿl-mL-M\u00f1-u\u00d1-U])/');
        $regex_constraint->message = 'Accepts only uppercase or lowercase letters (k,n,v) and # as empty';
        $empty = '';
        $form = $this->createFormBuilder()
            ->add('our_party',null,array(
                'constraints' => [
                    $length_constraint,
                    $regex_constraint
                ]
            ))
            ->add('opposition_party',null,array(
                'constraints' => [
                    $length_constraint,
                    $regex_constraint
                ]
            ))
            ->add('calculate', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $our_count_spaces = substr_count(strtoupper($data['our_party']),' ');
            $opposition_count_spaces = substr_count(strtoupper($data['opposition_party']),' ');
            $our_count_pads = substr_count(strtoupper($data['our_party']),'#');
            $opposition_count_pads = substr_count(strtoupper($data['opposition_party']),'#');
            if($our_count_spaces > 1 || $our_count_pads > 1 || $opposition_count_spaces > 1 || $opposition_count_pads > 1){
                $empty = 'Signatures only accepts one empty (space or #)';
            }else{
                return $this->result('winner',$form->getData());
            }
        }

        return $this->render('home/winner.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description,
            'form' => $form->createView(),
            'empty' => $empty
        ]);
    }

    public function minimum_signature(Request $request): Response
    {
        $title = 'What signatures do I need?';
        $content_title = 'Calculate the minimum signature to win';
        $content_description = 'Enter the signatures of the contract to be evaluated and those of the opponent to know the minimum signature to win, if possible.';
        $length_constraint = new Length(array('min'=> 2, 'max' => 3));
        $regex_constraint = new Regex('/[knvKNV#]{1}[knvKNV#]{1}(?![a-jA-JÀ-ÿl-mL-M\u00f1-u\u00d1-U])/');
        $regex_constraint->message = 'Accepts only uppercase or lowercase letters (k,n,v) and # as empty';
        $empty = '';
        $form = $this->createFormBuilder()
            ->add('our_party',null,array(
                'constraints' => [
                    $length_constraint,
                    $regex_constraint
                ]
            ))
            ->add('opposition_party',null,array(
                'constraints' => [
                    $length_constraint,
                    $regex_constraint
                ]
            ))
            ->add('calculate', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $our_count_spaces = substr_count(strtoupper($data['our_party']),' ');
            $opposition_count_spaces = substr_count(strtoupper($data['opposition_party']),' ');
            $our_count_pads = substr_count(strtoupper($data['our_party']),'#');
            $opposition_count_pads = substr_count(strtoupper($data['opposition_party']),'#');
            if($our_count_spaces > 1 || $our_count_pads > 1 || $opposition_count_spaces > 1 || $opposition_count_pads > 1){
                $empty = 'Signatures only accepts one empty (space or #)';
            }elseif($our_count_spaces == 0 && $our_count_pads == 0 && strlen($data['our_party']) == 3){
                $empty = 'Our party needs one empty (space or #) to calculate';
            }else{
                return $this->result('minimun_signature',$form->getData());
            }
        }

        return $this->render('home/minimum_signature.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' =>$content_description,
            'form' => $form->createView(),
            'empty' => $empty
        ]);
    }

    public function result($view,$data)
    {
        $our_party_contract = New Contract($data['our_party']);
        $opposition_party_contract = New Contract($data['opposition_party']);
        $our_party_points = $our_party_contract->sum();
        $opposition_party_points = $opposition_party_contract->sum();
        if ($view == 'winner'){
            $content_title = 'And the winner is... :';
            if($our_party_points > $opposition_party_points){
                $content_description = 'Our party wins the trial';
            }elseif($opposition_party_points > $our_party_points ){
                $content_description = 'Opposite party wins the trial';
            }else{
                $content_description = 'Nobody wins the trial s';
            }
        }else{
            $content_title = 'The mimimun signature you need is... :';
            $result = $our_party_contract->minimun_signature($our_party_contract,$opposition_party_contract);
            $content_description = $result;
        }
        $title = 'Result';
        return $this->render('home/result.html.twig', [
            'title' => $title,
            'content_title' =>$content_title,
            'content_description' => $content_description,
            'our_party' => 'Our party('.$data['our_party'].') '.$our_party_points.' points',
            'opposition_party' => 'Opposition party('.$data['opposition_party'].') '.$opposition_party_points.' points',
        ]);
    }

}
