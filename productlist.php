<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product_List</title>
  <style>
    .main {
      /* display: block;
    text-align: center;
    align-items: center; */

    }

    table {
      margin-left: 31%;
      ;
    }
  </style>
</head>

<body>

  <div class="main">

    <?php


    $products = array(
      "Electronics" => array(
        "Television" => array(
          array(
            "id" => "PR001",
            "name" => "MAX-001",
            "brand" => "Samsung"
          ),
          array(
            "id" => "PR002",
            "name" => "BIG-301",
            "brand" => "Bravia"
          ),
          array(
            "id" => "PR003",
            "name" => "APL-02",
            "brand" => "Apple"
          )
        ),
        "Mobile" => array(
          array(
            "id" => "PR004",
            "name" => "GT-1980",
            "brand" => "Samsung"
          ),
          array(
            "id" => "PR005",
            "name" => "IG-5467",
            "brand" => "Motorola"
          ),
          array(
            "id" => "PR006",
            "name" => "IP-8930",
            "brand" => "Apple"
          )
        )
      ),
      "Jewelry" => array(
        "Earrings" => array(
          array(
            "id" => "PR007",
            "name" => "ER-001",
            "brand" => "Chopard"
          ),
          array(
            "id" => "PR008",
            "name" => "ER-002",
            "brand" => "Mikimoto"
          ),
          array(
            "id" => "PR009",
            "name" => "ER-003",
            "brand" => "Bvlgari"
          )
        ),
        "Necklaces" => array(
          array(
            "id" => "PR010",
            "name" => "NK-001",
            "brand" => "Piaget"
          ),
          array(
            "id" => "PR011",
            "name" => "NK-002",
            "brand" => "Graff"
          ),
          array(
            "id" => "PR012",
            "name" => "NK-003",
            "brand" => "Tiffany"
          )
        )
      )
    );


    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";

    // <<<<< -------------Task 1 ----->>>>>>
    echo "<h1 style='text-align:center'>Task NO. 01</h1>";
    echo "<div style='text-align:center'>";
    echo "<table border='1px' cellpadding='5px' cellspacing='0' text-align='center' >";
    echo "<tr><td><h3>Category</h3></td>
<td><h3>Subcategory</h3></td>

<td><h3>ID</h3></td>
<td><h3>Name</h3></td>
<td><h3>Brand<h3></td></tr>";

    foreach ($products as $key => $value) {
      foreach ($value as $val2 => $value3) {
        foreach ($value3 as $value4 => $newval) {
          echo "<tr><td>$key</td>";
          echo "<td>$val2</td>";
          echo "<td>" . $newval["id"] . "</td>";
          echo "<td>" . $newval["name"] . "</td>";
          echo "<td>" . $newval["brand"] . "</td>";
        }
        echo "</tr>";
      }
    }
    echo "</table>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // <<<<< -------------Task 2 ----->>>>>>
    echo "<h1 style='text-align:center'>Task NO. 02</h1>";
    echo "<div style='text-align:center'>";
    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr><td><h3>Category</h3></td>
<td><h3>Subcategory</h3></td>

<td><h3>ID</h3></td>
<td><h3>Name</h3></td>
<td><h3>Brand<h3></td></tr>";
    foreach ($products as $key => $value) {

      foreach ($value as $val2 => $value3) {

        if ($val2 == "Mobile") {

          foreach ($value3 as $newval3 => $value4) {
            echo "<tr><td>$key</td>";
            echo "<td>$val2</td>";
            foreach ($value4 as $newv4) {
              echo "<td>$newv4</td>";
            }
          }
          echo "</tr>";
        }
      }
    }
    echo "</table>";
    echo "</div>";

    // <<<<< -------------Task 3 ----->>>>>>
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<h1 style='text-align:center'>Task NO. 03</h1>";
    echo "<div style='text-align:center'>";
    foreach ($products as $key => $value) {
      foreach ($value as $val2 => $value3) {
        foreach ($value3 as $value4 => $newval) {

          if ($newval['brand'] == 'Samsung') {
            echo $newval['brand'] . "<br>";
            echo "Product ID: " . $newval['id'] . "<br>";
            echo "Product Name: " . $newval['name'] . "<br>";
            echo "Subcategory: " . $val2 . "<br>";
            echo "Category: " . $key . "<br>";
          }
          echo "<br>";
        }
      }
    }
    echo "</div>";
    echo "<br>";



    // <<<<< -------------Task 4 ----->>>>>>
    echo "<h1 style='text-align:center'>Task NO. 04</h1>";
    echo "<div style='text-align:center'>";
    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr><td><h3>Category</h3></td>
<td><h3>Subcategory</h3></td>

<td><h3>ID</h3></td>
<td><h3>Name</h3></td>
<td><h3>Brand<h3></td></tr>";

    foreach ($products as $key => $value) {
      foreach ($value as $val2 => $value3) {

        foreach ($value3 as $value4 => $newval) {
          if ($newval["id"] == "PR003") {
            unset($products[$key][$val2][$value4]);
          } else {
            echo "<tr><td>$key</td>";
            echo "<td>$val2</td>";
            echo "<td>" . $newval["id"] . "</td>";
            echo "<td>" . $newval["name"] . "</td>";
            echo "<td>" . $newval["brand"] . "</td>";
          }
        }
        echo "</tr>";
      }
    }
    echo "</table>";
    echo "</div>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // echo "<pre>";
    // print_r($products);
    // echo "</pre>";





    // <<<<< -------------Task 5 ----->>>>>>
    echo "<h1 style='text-align:center'>Task NO. 05</h1>";
    echo "<div style='text-align:center'>";
    echo "<table border='1px' cellpadding='5px' cellspacing='0'>";
    echo "<tr><td><h3>Category</h3></td>
<td><h3>Subcategory</h3></td>

<td><h3>ID</h3></td>
<td><h3>Name</h3></td>
<td><h3>Brand<h3></td></tr>";

    foreach ($products as $key => $value) {
      foreach ($value as $val2 => $value3) {
        foreach ($value3 as $value4 => $newval) {

          if ($newval["id"] == "PR002") {
            $newval["name"] = "BIG-555";
            echo "<tr><td>$key</td>";
            echo "<td>$val2</td>";
            echo "<td>" . $newval["id"] . "</td>";
            echo "<td>" . $newval["name"] . "</td>";
            echo "<td>" . $newval["brand"] . "</td>";
          } else {
            echo "<tr><td>$key</td>";
            echo "<td>$val2</td>";
            echo "<td>" . $newval["id"] . "</td>";
            echo "<td>" . $newval["name"] . "</td>";
            echo "<td>" . $newval["brand"] . "</td>";
          }
        }
        echo "</tr>";
      }
    }
    echo "</table>";
    echo "</div>";
    echo "<br>";
    ?>
  </div>
</body>

</html>
