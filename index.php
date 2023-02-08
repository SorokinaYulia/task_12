
<table>
<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

//print_r($example_persons_array);  



$fullname = array_column($example_persons_array, 'fullname');
print_r ($fullname);

echo is_array($fullname) ? 'Массив' : 'Не массив';


function getFullnameFromParts($surname, $name, $patronomic){
    $fullname = is_array($fullname) ? $fullname : array();
    for($i=0; $i < count($fullname); $i++){
    
        $fio = explode(" ",$fullname[$i]);
    
            $surname = $fio[$i][0];
            
            $name = $fio[$i][1];
            

            $patronomic =  $fio[$i][2];
           
    return $surname.' '.$name.' '.$patronomic;

        
    
        }
    }
    getFullnameFromParts($surname, $name, $patronomic);


function getPartsFromFullname($fio){
    $fullname = is_array($fullname) ? $fullname : array();
    for($i=0; $i < count($fullname); $i++){
        $fio = explode(" ",$fullname[$i]);          
        return ( ['surname' => $fio[0] ,'name' => $fio[1], 'patronomyc' =>$fio[2]]);
    }


   }
   
getPartsFromFullname($fio);


?>
      
            
      
        
        
          

 


    
   