<?php
    $do_bazy = mysqli_connect('localhost', 'root', '', 'klienci');
    if(!$do_bazy)
    {
        exit("Błąd połączenia z serwerem MySQL");
    }

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $miejscowosc = $_POST['miejscowosc'];

    $dodaj = "INSERT INTO klienci(ID_Klienta, Imie, Nazwisko, Miejscowosc) VALUES(NULL, '$imie', '$nazwisko', '$miejscowosc')";

    $zapytanie = mysqli_query($do_bazy, $dodaj);
    if(!$zapytanie === true)
    {
        echo "Nowy klient nie został dodany do bazy";
    }

    else
    {
        echo "Klient ".$imie." ".$nazwisko." został dodany do bazy.";
    }
    mysqli_close($do_bazy);
?>