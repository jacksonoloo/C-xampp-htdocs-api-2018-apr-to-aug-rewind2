<?php
/*
  Consider the following string(bbit3c.txt)
  It constains names(surname,second_name,first_name),number,country and country code of some individuals

  @Required
  1. Create a new branch from the develop branch called feature-rewind-1
  2. Display the following data as follows

      a). first_name second_name,surname (# country_code(0) number[country])
      b). .......
      c). .......

    Summary
     -- Total names : total.
     -- Total unique countries : total(list of countries - comma separated)
  3. Commit changes of the new branch
  4. Merge changes with the development branch
  5. Push the changes to your repo.
  6. Submit the github url on google classroom (Check Quiz 1)
 */
 ?>
 <?


 $Snake_doc = "Chirakahula,Mukwana Joe.0500387482.UGANDA.+256|
 Wambua,Doe Mumbua.080023450.KENYA.+254|
 Vonbora,Katherina Luther.0600990033.GERMANY.+32
 |Boromir,Grommit Wallace.0100873901.IRELAND.+98
 |Piepont,Edwards Jonathan.0200983729.AMERICA.+1
 |Asaph,Elihu Mose.02990033.ISRAEL.+2
 |Otoyo,Wafula Joel.0777799920.KENYA.+254
 |Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
 |SARATON,DAVID BREINARD.043899292.AMERICA.+1
 |POMPI,JOHN OWEN.074749292.ZAMBIA.+267
 |MAG,JOHN BUNYAN.09837328.UGANDA.+256
 |Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32";
 ?>

<html>
<body>
<table>
  <tr>
    <th>first_name</th>
    <th>middle_name</th>
    <th>last_name</th>
    <th>country</th>
    <th>number+code</th>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Mukwana</td>
    <td>Chirakahula</td>
    <th>UGANDA<th/>
    <th>+256 0500387482<th>
  </tr>
  <tr>
    <td>Doe</td>
    <td>Mumbua</td>
    <td>Wambua</td>
    <th>KENYA<th/>
    <th>+254 080023450<th/>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</body>
</html>
