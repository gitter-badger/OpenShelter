<?php
include_once("../conf.php");
$tbl_dummydata ="INSERT INTO `cats` (`id`, `name`, `bio`, `photo`, `gender`, `added`) VALUES
(7, 'Tigger', 'He is a 8 year old, de-sexed and vaccinated surrendered pet. he is a large, cuddly cat who doesn''t mind children.', 'http://images.rartoo.com/images/img16.jpg', 'm', '2015-11-01 00:00:00'),
(3, 'CC', 'He is 6 years old, de-sexed and vaccinated, surrendered pet. He is a shy, gently boy, who loves playing with our volunteers but then becomes shy when he meets someone new.', 'http://images.rartoo.com/images/img19.jpg', 'm', '2015-11-01 00:00:00'),
(4, 'Milly', 'She is a young, de-sexed and vaccinated cat. She is a little cat with a very loud voice. She is very affectionate. She has an unusual coat, dark on the top and white underneath. ', 'http://images.rartoo.com/images/img11.gif', 'f', '2015-11-01 00:00:00'),
(5, 'Roxy', 'She is a 9 month old, de-sexed and vaccinated cat. She is very active cat who loves to play, but is shy of strangers.', 'http://images.rartoo.com/images/img12.jpg', 'f', '2015-11-01 00:00:00'),
(6, 'Bella', 'She is a 3 year old de-sexed and vaccinated cat. She doesn''t like other cats. She used to live with a small dog of which she was very fond.', 'http://images.rartoo.com/images/img15.jpg', 'f', '0000-00-00 00:00:00')";
$query = mysqli_query($db, $tbl_dummydata);
$tbl_dummydata ="INSERT INTO `dogs` (`id`, `name`, `bio`, `photo`, `gender`, `added`) VALUES
(2, 'Owen', 'He is a 7 year old, de-sexed and vaccinated Heeler cross. He is a lovely dog who wants to be with you all the time.', 'http://images.rartoo.com/images/img1.jpg', 'm', '2015-11-01 00:00:00'),
(3, 'Ingar', 'She is a 2 year old microchipped de-sexed and vaccinated American Bulldog cross. She is a lovely dog who is good with some other dogs. She loves people.', 'http://images.rartoo.com/images/img2.jpg', 'f', '2015-11-01 00:00:00'),
(4, 'Ivan', 'He is a 3 year old, de-sexed and vaccinated, Heeler cross. He was very shy when he first came in but now is a happy boy who loves his walks.', 'http://images.rartoo.com/images/img5.jpg', 'm', '2015-11-01 00:00:00'),
(5, 'Tammy', 'She is a 3 year old, de-sexed vaccinated and microchipped Shitzu cross. Although she is blind in one eye, she is a happy little dog who is good with other dogs.', 'http://images.rartoo.com/images/img6.jpg', 'f', '2015-11-01 00:00:00'),
(6, 'Feena', 'She is a 5 month old de-sexed vaccinated and microchipped Kelpie. She will need training.', '', 'f', '2015-11-01 00:00:00'),
(7, 'Harley', 'He is a Kelpie cross. He has only just arrived so hasn''t been to the vet yet. He will be available once he is de-sexed and vaccinated.', '', 'm', '2015-11-01 00:00:00')";
$query = mysqli_query($db, $tbl_dummydata);
?>
<h1>Dummy data inserted into database!</h1>
<h2>Make sure you delete the /install directory from your webhost</h2>
<a href="../admin">Click here to go to admin home page</a>