<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
  <title><?= $pageName; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        screens: {
          'xs': {'max': '639px'},
          'sm': {'min': '640px', 'max': '767px'},
          'md': {'min': '768px', 'max': '1023px'},
          'lg': {'min': '1024px', 'max': '1279px'},
          'xl': {'min': '1280px', 'max': '1535px'},
          '2xl': {'min': '1536px'},
        },
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
</head>
<body>