<?php
    include_once './src/pdo.php';

    if (isset($_POST) && isset($_SESSION['firstname']) && isset($_SESSION['lastname']) && isset($_SESSION['email']) && isset($_SESSION['passwords']) && isset($_SESSION['country']) && isset($_SESSION['city'])) {
        $id = $_SESSION['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $passwords = $_POST['passwords'];
        $country = $_POST['country'];
        $city = $_POST['city'];

        switch($_POST) {
            // change the name of the user in the database if the name is not empty & if the name is different from the current one
            case ($firstname != $_SESSION['firstname']):
                $q = $bdd->prepare("UPDATE client SET firstname = :firstname WHERE id = :id");
                $q->execute(array('firstname' => $firstname,
                                  'id' => $id
                ));
                $_SESSION['firstname'] = $firstname;
                break;
            // change the lastname of the user in the database if the lastname is not empty & if the lastname is different from the current one
            case ($lastname != $_SESSION['lastname']):
                $q = $bdd->prepare("UPDATE client SET lastname = :lastname WHERE id = :id");
                $q->execute(array('lastname' => $lastname,
                                  'id' => $_SESSION['id']
                ));
                $_SESSION['lastname'] = $lastname;
                break;
            // change the email of the user in the database if the email is not empty & if the email is different from the current one
            case ($email != $_SESSION['email']):
                $q = $bdd->prepare("UPDATE client SET email = :email WHERE id = :id");
                $q->execute(array('email' => $email,
                                  'id' => $_SESSION['id']
                ));
                $_SESSION['email'] = $email;
                break;
            // change the password of the user in the database if the password is not empty & if the password is different from the current one
            case ($passwords != $_SESSION['passwords']):
                $q = $bdd->prepare("UPDATE client SET passwords = :passwords WHERE id = :id");
                $passwords = password_hash($passwords, PASSWORD_BCRYPT);
                $q->execute(array('passwords' => $passwords,
                                  'id' => $_SESSION['id']
                ));
                $_SESSION['passwords'] = $passwords;
                break;
            // change the country of the user in the database if the country is not empty & if the country is different from the current one
            case ($country != $_SESSION['country']):
                $q = $bdd->prepare("UPDATE client SET country = :country WHERE id = :id");
                $q->execute(array('country' => $country,
                                  'id' => $_SESSION['id']
                ));
                $_SESSION['country'] = $country;
                break;
            // change the city of the user in the database if the city is not empty & if the city is different from the current one
            case ($city != $_SESSION['city']):
                $q = $bdd->prepare("UPDATE client SET city = :city WHERE id = :id");
                $q->execute(array('city' => $city,
                                  'id' => $_SESSION['id']
                ));
                $_SESSION['city'] = $city;
                break;
            }
            if ($_req) {
                print "<section>
                <p class=\"success\"> Vos informations ont bien été modifiées </p>";
                print "<a href=\"login.php\"> Retour à l'espace membre </a>
                </section>";
    }}

    // if(isset($_POST['modifier'])){
    //     $firstname = $_POST['firstname'];
    //     $names = $_POST['lastname'];
    //     $email = $_POST['email'];
    //     $passwords = $_POST['passwords'];
    //     $mdphash = password_hash($passwords, PASSWORD_DEFAULT);
    //     $country = $_POST['country'];
    //     $city = $_POST['city'];
        
    //     $update = $bdd->prepare('UPDATE client SET names = :names, firstname = :firstname, mail = :mail, passwords = :passwords WHERE id = :id');
    //     $update->execute(array(
    //         'firstname' => $firstname,
    //         'lastname' => $lastname,
    //         'email' => $email,
    //         'passwords' => $mdphash,
    //         'country' => $country,
    //         'city' => $city,

    //     ));
    //     $update->closeCursor();
    //     header('Location: ../espace_membre.php');
    // }else{
    //     echo "Veuillez remplir tous les champs";
    // }
    
?>