<!DOCTYPE html>
<html>
<head>
    <title>task9</title>
</head>
<body>
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
?>

<table>
    <tr>
        <th>Category </th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
<?php
foreach ($products as $key => $categories) {
    foreach ($categories as $k => $subcategory) {
        foreach ($subcategory as $x => $values) {
            echo"<tr><td>";
            echo $key;
            echo "</td>";
            echo "<td>";
            echo $k;
            echo "</td>";
            echo "<td>";
            echo $values['id'];
            echo"</td>";
            echo"<td>";
            echo $values['name'];
            echo "</td>";
            echo "<td>";
            echo $values['brand'];
            echo"</td></tr>";
        }
    }
}
?>
</table>
<hr>
<table>
    <tr>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
    <?php
    foreach ($products as $key => $categories1) {
        foreach ($categories1 as $k => $subcategory1) {
            if($k == "Mobile"){
                 foreach ($subcategory1 as $x => $val) {
                echo "<tr><td>";
                echo $k;
                echo "</td>";
                echo "<td>";
                echo $val['id'];
                echo "</td>";
                echo "<td>";
                echo $val['name'];
                echo "</td>";
                echo "<td>";
                echo $val['brand'];
                echo "</td></tr>";

               }
            }
        }
        
    }
?>
</table>
<hr>
<?php
foreach ($products as $key => $categories2) {
    foreach ($categories2 as $k => $subcategory2) {
        foreach ($subcategory2 as $x => $val1) {
            if($val1['brand'] == "Samsung")
            {
                echo "Product ID:";
                echo $val1['id'];
                echo "<br/>";
                echo "Product Name:";
                echo $val1['name'];
                echo "<br/>";
                echo "Subcategory:";
                echo $k;
                echo "<br/>";
                echo "Category";
                echo $key;
                echo "<br/>";
            }
            
        }
        
    }
    
  }
?>
<hr>
<?php
foreach ($products as $key => $categories3) {
    foreach ($categories3 as $k => $subcategory3) {
        foreach ($subcategory3 as $x => $val2) {
            if($val2["id"]=="PR003")
                        {
                            //echo "string";
                            unset($products[$key][$k][$x]);
                        }
            
        
         }
    }
}
   //echo "<pre>";
           // print_r($products);
           // echo "</pre>";


        
?>

<table>
    <tr>
        <th>Category </th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
<?php
foreach ($products as $key => $categories) {
    foreach ($categories as $k => $subcategory) {
        foreach ($subcategory as $x => $values) {
            echo"<tr><td>";
            echo $key;
            echo "</td>";
            echo "<td>";
            echo $k;
            echo "</td>";
            echo "<td>";
            echo $values['id'];
            echo"</td>";
            echo"<td>";
            echo $values['name'];
            echo "</td>";
            echo "<td>";
            echo $values['brand'];
            echo"</td></tr>";
        }
    }
}
?>

</table>

<hr>
<?php
foreach ($products as $key => $categories4) {
    foreach ($categories4 as $k => $subcategory4) {
        foreach ($subcategory4 as $x => $val3) {
            if($val3["id"]=="PR002")
                        {
                            //echo "string";
                            $products[$key][$k][$x]["name"]="BIG-555";
                        }           
        
            }
     }
}
//echo "<pre>";
//print_r($products);
//echo "</pre>";

?>
<table>
    <tr>
        <th>Category </th>
        <th>Subcategory</th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
    </tr>
<?php
foreach ($products as $key => $categories) {
    foreach ($categories as $k => $subcategory) {
        foreach ($subcategory as $x => $values) {
            echo"<tr><td>";
            echo $key;
            echo "</td>";
            echo "<td>";
            echo $k;
            echo "</td>";
            echo "<td>";
            echo $values['id'];
            echo"</td>";
            echo"<td>";
            echo $values['name'];
            echo "</td>";
            echo "<td>";
            echo $values['brand'];
            echo"</td></tr>";
        }
    }
}
?>
</table>

</body>
</html>