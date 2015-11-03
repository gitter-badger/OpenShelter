<?php include_once("../conf.php");
$tbl_dummydata ="INSERT INTO `cats` (`id`, `name`, `bio`, `photo`, `gender`, `added`) VALUES
(7, 'Tigger', 'He is a 8 year old, de-sexed and vaccinated surrendered pet. he is a large, cuddly cat who doesn''t mind children.', 'img16.jpg', 'm', '2015-11-01 00:00:00'),
(3, 'CC', 'He is 6 years old, de-sexed and vaccinated, surrendered pet. He is a shy, gently boy, who loves playing with our volunteers but then becomes shy when he meets someone new.', 'img19.jpg', 'm', '2015-11-01 00:00:00'),
(4, 'Milly', 'She is a young, de-sexed and vaccinated cat. She is a little cat with a very loud voice. She is very affectionate. She has an unusual coat, dark on the top and white underneath. ', 'img11.gif', 'f', '2015-11-01 00:00:00'),
(5, 'Roxy', 'She is a 9 month old, de-sexed and vaccinated cat. She is very active cat who loves to play, but is shy of strangers.', 'img12.jpg', 'f', '2015-11-01 00:00:00'),
(6, 'Bella', 'She is a 3 year old de-sexed and vaccinated cat. She doesn''t like other cats. She used to live with a small dog of which she was very fond.', 'img15.jpg', 'f', '0000-00-00 00:00:00')";
$query = mysqli_query($db, $tbl_dummydata);
$tbl_dummydata ="INSERT INTO `dogs` (`id`, `name`, `bio`, `photo`, `gender`, `added`) VALUES
(2, 'Owen', 'He is a 7 year old, de-sexed and vaccinated Heeler cross. He is a lovely dog who wants to be with you all the time.', 'img1.jpg', 'm', '2015-11-01 00:00:00'),
(3, 'Ingar', 'She is a 2 year old microchipped de-sexed and vaccinated American Bulldog cross. She is a lovely dog who is good with some other dogs. She loves people.', 'img2.jpg', 'f', '2015-11-01 00:00:00'),
(4, 'Ivan', 'He is a 3 year old, de-sexed and vaccinated, Heeler cross. He was very shy when he first came in but now is a happy boy who loves his walks.', 'img5.jpg', 'm', '2015-11-01 00:00:00'),
(5, 'Tammy', 'She is a 3 year old, de-sexed vaccinated and microchipped Shitzu cross. Although she is blind in one eye, she is a happy little dog who is good with other dogs.', 'img6.jpg', 'f', '2015-11-01 00:00:00'),
(6, 'Feena', 'She is a 5 month old de-sexed vaccinated and microchipped Kelpie. She will need training.', '', 'f', '2015-11-01 00:00:00'),
(7, 'Harley', 'He is a Kelpie cross. He has only just arrived so hasn''t been to the vet yet. He will be available once he is de-sexed and vaccinated.', '', 'm', '2015-11-01 00:00:00')";
$query = mysqli_query($db, $tbl_dummydata);
$tbl_dummydata ="INSERT INTO `pages` (`pagename`, `title`, `text`) VALUES 
('news', 'News', '<br><b><font size=\"6\" color=blue>Vale Sue Whelan,<br>co-founder of the Shelter</font><br><p>Our dear friend Sue has passed away. She spent the last 23 years of her life dedicated to the Shelter. No mean achievement when you think of the thousands of animals that have found new homes in that time.</p>\r\n<p>She was also responsible for the boarding kennels and cattery. Many owners brought their animals to her for boarding because they trusted her.</p>\r\n<p>She has left a great hole in our lives. We all have fond memories of her which will remain with us always. Hopefully we can carry on her good work if we get the continued support of the community.</p>\r\n<p>Dear Sue forever in our hearts.</p><p><font color=red>We will not be able to have the 4 paws walk this year. We apologise for any disappointment this may cause.</font></b></p>'),
('aboutus', 'About Us', '<p>The Hahndorf Interim Animal Shelter Inc. unofficially opened the doors in 1992 to care for abandoned dogs. In 1997 the Shelter was officially incorporated as a charity, and not for profit entity caring for cats and dogs. The founders are Sue Whelan and Dorothy Caddle who hope to re-home all pets that come through the Shelter. Some animals find homes quickly, others take longer because of needing rehabilitation, like trust, love and confidence. No animal is put down simply because it was unwanted. We would emphasize that this is an EMERGENCY Shelter for abandoned pets; we are not prepared to take pets simply because their owners do not want them anymore. We advise owners to advertise their pets.</p><p>The Shelter is run on a voluntary basis, without government funding. We rely on the generosity of the community for donations of canned and dry food, fresh bones, kitty litter, blankets and towels, toys and treats, etc. We have collection tins in many Hills shops and collection crates in many supermarkets. We always need more volunteers and it is a great way to keep fit!</p><p>Our main fundraiser is a Calendar we bring out usually in October, with stories and photos of pets we have re-homed. At $5 it is a lovely Christmas present for your friends who love animals. We also hold an annual 4 Paws Walk in Mount Barker in November.</p><p>The Shelter is the Pound for the District Council of Mt Barker. Many dogs are unclaimed, probably because the dog is untrained, has not been part of a family or has simply become a nuisance. These dogs often need reassurance, love and to learn respect and manners!! Often their coats are so matted and dirty that it is hard to recognize the breed. After a bath and clip, a new character emerges, free for knotty hair and far happier.</p><p>Our newsletter is full of heart-warming stories from people who have true commitment to the pets they have adopted from us.</P>'),
('choosingapet', 'Choosing a Pet', 'Some things you should think about:-<br><br><b>You will need a letter from your landlord if you are renting giving permission to keep an animal.</b><p>Find out everything you need to know before you commit yourself to 14 years or more of caring for a pet.<br><br>Whether you chose a dog or a cat will depend on you life style and how your pet will fit into it eg do you have good fencing.</p>	\r\n<p><b>DE-SEXING</b><br><br>Puppies & kittens may take 2 years to grow up but are able to reproduce as young as 4 months old. Young dogs & cats bringing up babies are using energy they need to grow big & strong.<br><br><b><i>Ask your vet about de-sexing & the cost.</i></b></p>\r\n<p><b>VACCINATING</b><br><br>All animals need vaccinating once a year. This also gives your vet a chance to check your pets health. It is cheaper to vaccinate your pet once a year than nurse them through a fatal illness.<br><br><b><i>Research which vaccinations your pet will need & the cost involved.</i></b></p><p><b>WORMING </b><br><br>Cats & dogs need worming every 12 weeks. Not worming regularly will result in a skinny animal with a poor coat.<br><br><b><i>Ask your vet about suitable worming tablets & how much they cost.</i></b></p>\r\n<p><b>FLEAS</b><br><br>Regular treatment for fleas is essential. Fleas bite your pet & can cause anaemia. Fleas can give your pet Tape Worm. No one wants to cuddle a flea ridden animal. Flea treatments are easy to apply to the back of the neck.<br><br><b><i>Ask your vet how much flea treatments cost.</i></b></p>\r\n<p><b>GROOMING<br></b><br>Grooming is essential to your pets health. How much grooming your pet needs will depend on whether the animal is longhaired or short haired.<br><br><b><i>Research which grooming tools you will need for your pet & how much they cost.</i></b></p>\r\n<p><b>LONG OR SHORT HAIRED</b><br><br>Whether you choose a pet with longhair or shorthair will depend on whether you are prepared to cope with the work & expense of owning a longhaired animal. Puppies & kittens do not have their full adult coats. A fluffy puppy who looks cute will grow into an expensive pet.</p>\r\n<p><b>EXERCISE</b><br><br>Builds strong muscles, improves health, creates feel good endorphins in the animals brain, helps creates a contented animal & stops the animal becoming bored.<br><br><b><i>Find out how much exercise your pet will need.</i></b></p><p><b>TRAINING</b><br><br>Dogs are pack animals & need you to be pack leader. Doing obedience classes with your dog will help you interact with your dog. Dogs love to learn. Dogs love the praise that comes with getting it right.<br><br><b><i>Find out about local obedience classes.</i></b> </p><p><b>DIET</b><br><br>All animals are different and have different dietary needs. A good diet might not be the cheapest one but will give you a healthy pet.<br><br><b><i>Ask your vet about the best diet for your pet.</i></b></P>'),
('patshelp', 'P.A.T.S.H.E.L.P.', '<p>P.A.T.S.H.E.L.P. was originally a programme designed to take Shelter dogs and cats to visit patients in Nursing Homes and Hostels, and also to allow elderly people to take a pet home for a short visit.</p><p>For the first few years this programme worked well, but unfortunately, cats struggled with the car travel and dogs became uncomfortable visiting some wards in Nursing Homes. We also lost some Volunteers who used to take the pets out.</p><p>For the last few years, PATSHELP has worked in reverse!!! We now take pets while their owners are in hospital for long or short stays, are moving into Nursing Homes or Retirement Villages, or simply because the owners have died and there is no family to care for the pet.</p><p>All of the pets without owners we take into the Shelter and attempt to re-home with the rest. Some require extensive dental or grooming work due to the sad neglect of their former owners, who were too ill to recognize the neglect or too poor to correct the neglect. All of these dogs are re-homed. Sadly cats are harder to adapt to a new life, and may stay with us for the rest of their lives.</p><p>PATSHELP mostly does not charge a fee for surrender of these pets, which is why the Shelter needs your help with funding. Please try and find it in your heart to consider these pets, whose lives have been devastated by the loss of their owners and do not know why. If only we have the telepathy to speak to them: hopefully, their kennel and cattery friends can explain.</p>'),
('volunteers', 'Volunteering', '<p><center><b>You need to be over 16 years old to volunteer.</p><font color=\"#ff0000\">All volunteers must wear sensible clothing and shoes. NOT high heels or thongs!</font></b></p><p>Volunteers are needed for the following tasks:</p><li><b>Gardening and yard cleaning.</b><br>Eg. lawn mowing, raking up leaves or just tidying up.<br><br><li><b>Handy persons for maintenance and repairs.</b><br>Eg. painting, repairing kennels or catteries.<br><br><li><b>Drivers for taking the animals to the vet.</b><br>Eg. taking dogs & cats to be de-sexed & vaccinated.<br><br><li><b>Cleaners for cleaning the catteries and feeding the cats.</b><br>Eg. poo removal, water bowls washed & refilled etc.<br><br><li><b>Washing up animal dishes and washing their bedding.<br><br><li>Dog walkers on Thursdays and Saturdays from 12 noon.<br><br><li>To wash and groom dogs.<br><br><li>To groom cats.</b></center>'),
('sidebar', 'Sidebar', '<br><h3>60 Martin Road, Hahndorf S.A.</h3><h3>Ph & Fax: (08) 8388 7514</h3><br><b>OPENING TIMES</b><br><br><b>Dog Adoptions</b><br><br>Thursday, Friday, Saturday<br><br>12:30 to 2:30 pm<br><br><b>Cat Adoptions</b><br><br>Friday & Saturday<br><br>12:30 to 2:30 pm<br><br><br><br><i>This is the only official web site for the shelter. Please ignore all others.</i><br><br><br>EFTPOS available for donations, please ring the shelter for more information.<br><br><br>Web site thanks to Rartoo.')";
$query = mysqli_query($db, $tbl_dummydata); ?>
<h1>Dummy data inserted into database!</h1>
<h2>Make sure you delete the /install directory from your webhost</h2>
<a href="../admin">Click here to go to admin home page</a>
