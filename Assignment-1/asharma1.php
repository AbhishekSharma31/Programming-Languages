/*
 
 Programming Languages
 Assignment 1 - asharma1.php
 
 Created by Abhishek Sharma on 10/15/15.
 Copyright (c) 2015 Abhishek. All rights reserved.
 
*/

<?php
    echo "\n";
    
    $task=$argv[1];
    if(empty($argv[1]) or (!(is_numeric($argv[1]))) or ($task>2))
    {
        die(" Error: Please input in the following format - Task_Number Input_File_Name Output_File_Name\n(Task_Number can be 1 or 2)\n");
    }
    
    
    
    //In case of Task 1
    if($argv[1]==1)
    {
        if(empty($argv[2]))
        {
            die("Error: Please enter an input file");
        }
        else if(empty($argv[3]))
        {
            die("Error: Please enter an output file");
        }
        else
        {
            $fileinput=$argv[2];
            $fileoutput=$argv[3];
            
            if(file_exists($fileinput))
            {	$filer1 = fopen($fileinput, 'r+') or die("Error: The file does not exist");
                fclose($filer1);
            }
            else
            {
                die("Specified Input File Does Not Exist !");
            }
            
            $filer2 = fopen($fileoutput, 'w+') or die("Error: The File could not be accessed.");
            
            
            $lines = file($fileinput);
            $i=0;
            $NoLine=0;
            foreach ($lines as $line)
            {
                $arrInput[$i]=$line;
                $i++;
                $NoLine=$i;
            }
            
            $lineNo=$NoLine;
            
            for($y=0;$y<$lineNo;$y++)
            {
                
                for($z=0;$z<sizeof($arrInput[$y]);$z++)
                {
                    $a=$arrInput[$y];
                    $strlen = strlen( $a );
                    for( $b = 0; $b <$strlen; $b++ )
                    {
                        $char = substr( $a, $b, 1 );
                        
                        if(ctype_alnum($char))
                        {
                            
                            $asciiValOfChar=ord($char);
                            
                            if($asciiValOfChar>63 && $asciiValOfChar<91)
                            {
                                $asciiValOfCypher=ord($char)+13;
                                if($asciiValOfCypher<91)
                                {
                                    $cypher=chr($asciiValOfCypher);
                                }
                                else
                                {
                                    $cypher=chr($asciiValOfCypher-26);
                                }
                            }
                            
                            if($asciiValOfChar>95 && $asciiValOfChar<123)
                            {
                                $asciiValOfCypher=ord($char)+13;
                                if($asciiValOfCypher<123)
                                {
                                    $cypher=chr($asciiValOfCypher);
                                }
                                else
                                {
                                    $cypher=chr($asciiValOfCypher-26);
                                }
                            }
                            
                            if(is_numeric($char))
                            {
                                $cypher=$char+5;
                                if ($cypher>9)
                                {
                                    $cypher = substr( $cypher, 1, 1 );
                                }
                            }
                            
                        }
                        else
                        {
                            $cypher=$char;
                        }
                        
                        
                        fwrite($filer2, $cypher);
                        
                    }
                    
                }
            }
            
            
        }
        echo "\n" ;
        fclose($filer2);
    }
    
    //In case of Task 2
    if($argv[1]==2)
    {
        
        if(empty($argv[2]))
        {
            die("Error: Please enter an Input File.");
        }
        else if(empty($argv[3]))
        {
            die("Error: Please enter an Output File.");
        }
        else
        {
            
            $fileinput=$argv[2];
            $fileoutput=$argv[3];
            if(file_exists($fileinput))
            {    
                $filer1 = fopen($fileinput, 'r+') or die("Error: Specified Input File Does Not Exist.");
                fclose($filer1);
            }
            else
            {
                die("Specified Input File Does Not Exist !");
            }
            $filer2 = fopen($fileoutput, 'w+') or die("Error: The File cannot be accessed.");
            
            $my_array['a']='z';
            $my_array['b']='y';
            $my_array['c']='x';
            $my_array['d']='w';
            $my_array['e']='v';
            $my_array['f']='u';
            $my_array['g']='t';
            $my_array['h']='s';
            $my_array['i']='r';
            $my_array['j']='q';
            $my_array['k']='p';
            $my_array['l']='o';
            $my_array['m']='n';
            $my_array['@']='*';
            
            /* or we can use the following way to define the same associative array
             
             $my_array= array('a'=>'z','b'=>'y','c'=>'x','d'=>'w','e'=>'v','f'=>'u','g'=>'t','h'=>'s','i'=>'r','j'=>'q','k'=>'p','l'=>'o','m'=>'n','@'=>'*');
             
             */
            
            
            $allKeys = array_keys($my_array);
            $Textinput = file($fileinput);
            $i2=0;
            $NoLine2=0;
            
            foreach ($Textinput as $line2) 
            {    
                $arrInput2[$i2]=$line2;
                $i2++;
                $NoLine2=$i2;
            }    
            $lineNo1=$NoLine2;
            $FinalArray = array();
            for($y1=0;$y1<$lineNo1;$y1++)
            {
                
                for($z1=0;$z1<sizeof($arrInput2[$y1]);$z1++)
                {
                    $a1=$arrInput2[$y1];
                    $strlen = strlen( $a1 );
                    
                    for( $b1=0; $b1<$strlen; $b1++ ) 
                    {
                        $char2 = substr( $a1, $b1, 1 );
                        
                        foreach($my_array as $keys => $value)
                        {    
                            if(isset($my_array[$char2]) && $my_array[$char2])
                            {
                                $FinalArray[$char2] = $my_array[$char2];
                                fwrite($filer2, $FinalArray[$char2] );
                                break;
                            }
                            else
                            {
                                $FinalArray[$char2] = $char2;
                                fwrite($filer2, $FinalArray[$char2] );
                                break;
                            }
                        }
                    }
                }
            }
            echo "\n" ;
            fclose($filer2);
            
            
            
        }
        
        
    }
    
    ?>
