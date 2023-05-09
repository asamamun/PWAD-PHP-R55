<?php
$story = "In the early 1990s, the internet was a collection of static websites with limited functionality. The web pages were simple, and users could only navigate through links and images.

Then, in 1991, Tim Berners-Lee, a British computer scientist, created the World Wide Web, a system of interlinked hypertext documents that could be accessed over the internet. Berners-Lee developed the HTML language to create web pages, the HTTP protocol to transfer data between servers and clients, and the URL format to identify resources on the web.

The web quickly grew in popularity, and web browsers like Mosaic and Netscape Navigator were developed to make it easier for users to navigate the web. The development of JavaScript, a programming language that allowed web pages to be interactive and dynamic, further expanded the possibilities of the web.

In the late 1990s, the dot-com bubble saw a surge in investment in internet-based companies, leading to a boom in web development. Companies like Google and Amazon were founded, and e-commerce sites began to appear on the web.

In the early 2000s, Web 2.0 emerged, which focused on user-generated content and social interaction. This led to the rise of social media sites like Facebook, Twitter, and Instagram, which are now some of the most popular websites on the internet.

Today, the web continues to evolve, with new technologies like artificial intelligence, blockchain, and the Internet of Things being integrated into web applications. The web has become an essential part of modern life, with billions of people using it every day for work, entertainment, and communication.";
echo "total: " . strlen($story). "<br>";
$f = count_chars($story,1);
arsort($f);
foreach ($f as $character => $occurance) {
  echo chr($character) ." found ". $occurance . " times <br>";
} 
?>
<hr>
<?php
$words = str_word_count($story);
printf("Total words in story: %s", $words);