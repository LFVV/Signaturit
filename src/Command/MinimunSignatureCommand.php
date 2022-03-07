<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MinimunSignatureCommand extends Command
{
    //Nombre del comando para su ejecución desde consola
    protected static $defaultName = 'app:minimun_signature';

    protected function configure()
    {
      $this
        ->setDescription('Show the minimun signature that we need to win opposition signatures')
        ->setHelp('Calculate the minimun signature that we need to win')
        ->addArgument('our_party_signatures', InputArgument::REQUIRED, 'Pass our party signatures.')
        ->addArgument('opposition_party_signatures', InputArgument::REQUIRED, 'Pass opposition party signatures.');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {   
        $roles = ['K' => 5, 'N' => 2, 'V' => 1, '#' => 0];
        $our_party_signatures = strtoupper($input->getArgument('our_party_signatures'));
        $opposition_party_signatures = strtoupper($input->getArgument('opposition_party_signatures'));
        $our_count_spaces = substr_count($our_party_signatures,' ');
        $opposition_count_spaces = substr_count($opposition_party_signatures,' ');
        $our_count_pads = substr_count($our_party_signatures,'#');
        $opposition_count_pads = substr_count($opposition_party_signatures,'#');
        if (empty($our_party_signatures)) {
                throw new \Exception('Missing parameter our_party_signatures');
                return Command::FAILURE;
        }
        if (empty($our_party_signatures)) {
            throw new \Exception('Missing parameter opposition_party_signatures');
            return Command::FAILURE;
        }
        if(strlen($our_party_signatures) < 2 || strlen($opposition_party_signatures) < 2){
            throw new \Exception('Only accepts one signature empty (space or #) and length 3');
            return Command::FAILURE;
        }
        if($our_count_spaces > 1 || $our_count_pads > 1 || $opposition_count_spaces > 1 || $opposition_count_pads > 1){
            throw new \Exception('Only accepts one signature empty (space or #)');
            return Command::FAILURE;
        }
        if($our_count_pads == 0 && strlen($our_party_signatures) == 3){
            throw new \Exception('Our party needs one empty (space or #) to calculate');
            return Command::FAILURE;
        }
        $aux_array = array_merge(str_split($our_party_signatures),str_split($opposition_party_signatures));

        foreach ($aux_array as $clave => $valor){
            $correct = array_key_exists($valor,$roles);
            if (!$correct){
                throw new \Exception('Only accepts this characters (K,N,V,#)');
                return Command::FAILURE;
            }
        }
        $count_our_party = ['K' => substr_count($our_party_signatures, 'K'), 'N' => substr_count($our_party_signatures,'N'), 'V' => substr_count($our_party_signatures,'V')];
        $count_opposition_party = ['K' => substr_count($opposition_party_signatures, 'K'), 'N' => substr_count($opposition_party_signatures,'N'), 'V' => substr_count($opposition_party_signatures,'V')];
        
        if($count_our_party['K'] > 0){
            $count_our_party['V'] = 0;
        }
        if($count_opposition_party['K'] > 0){
            $count_opposition_party['V'] = 0;
        }

        $sum_our_party = $count_our_party['K'] * $roles['K'] + $count_our_party['N'] * $roles['N'] + $count_our_party['V'] * $roles['V'];
        $sum_opposition_party = $count_opposition_party['K'] * $roles['K'] + $count_opposition_party['N'] * $roles['N'] + $count_opposition_party['V'] * $roles['V'];
        if($sum_our_party > $sum_opposition_party){
            $message = 'You win without new signatures';
        }else{
            $diff = $sum_opposition_party - $sum_our_party;
            if($diff == 0){
                if($count_opposition_party['K'] == 0){
                    $message = 'You need a Validator signature';
                }else{
                    $message = 'You need a Notary signature';
                }
            }elseif($diff == 1){
                $message = 'You need a Notary signature';
            }elseif($diff > 1 && $diff < 5){
                $message = 'You need a King signature';
            }else{
                $message = 'Is impossible to win';
            }
        } 
        $message .= ' -> Our party points: '.$sum_our_party.', Opposition party points: '.$sum_opposition_party;
        $output->writeln($message);
        return Command::SUCCESS;
    }
}