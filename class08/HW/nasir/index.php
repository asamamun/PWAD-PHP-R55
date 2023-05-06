<?php
include "./customers.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <table class="text-xs min-w-full">
      <?php
        $customers = file("./CSV/customers-10000.txt");
        $head = explode("|", $customers[0]);
        echo "<tr>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[0]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[1]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[2]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[3]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[4]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[5]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[6]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[7]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[8]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[9]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[10]</th>
          <th scope=\"col\" class=\"w-fit border-x border-gray-900 px-4 py-2\" >$head[11]</th>
        </tr>";

        foreach ($customers as $key => $value) {
          if($key==0) continue;
          $info = explode("|",$value);
          $customer = new Customers($info);
          $customer->display($customer);
        }
      ?>
    </table>
  </body>
</html>