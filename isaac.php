<?php
function name(){
    $my_name="AGABA ISAAC";
    return $my_name;
}
function my_age($c_year,$birth_year){
    $dob=13/10/2001;
    $age=$c_year-$birth_year;
    return $age;
}
function my_address(){
    $address="Rubindi-Mbarara";
    return $address;
}

print("welcome ".name()." to ".my_address());
print("<br> You are ".my_age(2024,2001)." years old");



?>