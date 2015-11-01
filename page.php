<?php if(isset($_GET["p"])){ $p = preg_replace('#[^a-z0-9]#i', '', $_GET['p']); } else { header("location: index.php"); exit(); }
include("conf.php");
include("include/header.php");

if ($p == 'volunteers') { echo '<h1>Volunteers</h1>
<p><b>You need to be over 16 years old to volunteer.</b></p>
<P>All volunteers must wear sensible clothing and shoes. NOT high heels or thongs! </p>
<p>Volunteers are needed for the following tasks:</p>
<li>Gardening and yard cleaning. Eg. lawn mowing, raking up leaves or just tidying up.<br><br>
<li>Handy persons for maintenance and repairs. Eg. painting, repairing kennels or catteries.<br><br>
<li>Drivers for taking the animals to the vet. Eg. taking dogs & cats to be de-sexed & vaccinated.<br><br>
<li>Cleaners for cleaning the catteries and feeding the cats. Eg. poo removal, water bowls washed & refilled etc.<br><br>
<li>Washing up animal dishes and washing their bedding.<br><br>
<li>Dog walkers on Thursdays and Saturdays from 12 noon.<br><br>
<li>To wash and groom dogs.<br><br>
<li>To groom cats.'; }

if ($p == 'patshelp') { echo '<h1>P.A.T.S.H.E.L.P.</h1>
<p>P.A.T.S.H.E.L.P. was originally a programme designed to take Shelter dogs and cats to visit patients in Nursing Homes and Hostels, and also to allow elderly people to take a pet home for a short visit.</p>
<p>For the first few years this programme worked well, but unfortunately, cats struggled with the car travel and dogs became uncomfortable visiting some wards in Nursing Homes. We also lost some Volunteers who used to take the pets out.</p>
<p>For the last few years, PATSHELP has worked in reverse!!! We now take pets while their owners are in hospital for long or short stays, are moving into Nursing Homes or Retirement Villages, or simply because the owners have died and there is no family to care for the pet.</p>
<p>All of the pets without owners we take into the Shelter and attempt to re-home with the rest. Some require extensive dental or grooming work due to the sad neglect of their former owners, who were too ill to recognize the neglect or too poor to correct the neglect. All of these dogs are re-homed. Sadly cats are harder to adapt to a new life, and may stay with us for the rest of their lives.</p>
<p>	PATSHELP mostly does not charge a fee for surrender of these pets, which is why the Shelter needs your help with funding. Please try and find it in your heart to consider these pets, whose lives have been devastated by the loss of their owners and don\'t know why. If only we have the telepathy to speak to them: hopefully, their kennel and cattery friends can explain.</p>'; }

if ($p == 'aboutus') { echo '<h1>About Us</h1>
<p>The Hahndorf Interim Animal Shelter Inc. unofficially opened it\'s doors in 1992 to care for abandoned dogs. In 1997 the Shelter was officially incorporated as a charity, and not for profit entity caring for cats and dogs. It\'s founders are Sue Whelan and Dorothy Caddle who hope to re-home all pets that come through the Shelter. Some animals find homes quickly, others take longer because of needing rehabilitation, like trust, love and confidence. No animal is put down simply because it was unwanted. We would emphasize that this is an EMERGENCY Shelter for abandoned pets; we are not prepared to take pets simply because their owners don\'t want them anymore. We advise owners to advertise their pets.</p>
<p>The Shelter is run on a voluntary basis, without government funding. We rely on the generosity of the community for donations of canned and dry food, fresh bones, kitty litter, blankets and towels, toys and treats, etc. We have collection tins in many Hills shops and collection crates in many supermarkets. We always need more volunteers and it is a great way to keep fit!</p>
<p>Our main fundraiser is a Calendar we bring out usually in October, with stories and photos of pets we have re-homed. At $5 it is a lovely Christmas present for your friends who love animals. We also hold an annual 4 Paws Walk in Mount Barker in November.</p>
<p>The Shelter is the Pound for the District Council of Mt Barker. Many dogs are unclaimed, probably because the dog is untrained, has not been part of a family or has simply become a nuisance. These dogs often need reassurance, love and to learn respect and manners!! Often their coats are so matted and dirty that it is hard to recognize the breed. After a bath and clip, a new character emerges, free for knotty hair and far happier.</p>
<p>Our Newsletter is full of heart-warming stories from people who have true commitment to the pets they have adopted from us.</P>'; }

if ($p == 'choosingapet') { echo '<h1>Choosing a pet</h1>
Some things you should think about:<br><br>
You will need a letter from your landlord if you are renting giving permission to keep an animal.
<p>Find out everything you need to know before you commit yourself to 14 years or more of caring for a pet. Whether you chose a dog or a cat will depend on you life style and how your pet will fit into it eg do you have good fencing.</p>	
<p><b>DE-SEXING</b>
Puppies & kittens may take 2 years to grow up but are able to reproduce as young as 4 months old. Young dogs & cats bringing up babies are using energy they need to grow big & strong.
Ask your vet about de-sexing & the cost</p>
<p><b>VACCINATING</b>
All animals need vaccinating once a year. This also gives your vet a chance to check your pets health. It is cheaper to vaccinate your pet once a year than nurse them through a fatal illness.
Research which vaccinations your pet will need & the cost involved.</p>
<p><b>WORMING </b>
Cats & dogs need worming every 12 weeks. Not worming regularly will result in a skinny animal with a poor coat.
Ask your vet about suitable worming tablets & how much they cost.</p>
<p><b>FLEAS</b>
Regular treatment for fleas is essential. Fleas bite your pet & can cause anaemia. Fleas can give your pet Tape Worm. No one wants to cuddle a flea ridden animal. Flea treatments are easy to apply to the back of the neck.
Ask your vet how much flea treatments cost.</p>
<p><b>GROOMING</b>
Grooming is essential to your pets health. How much grooming your pet needs will depend on whether the animal is longhaired or short haired.
Research which grooming tools you will need for your pet & how much they cost.</p>
<p><b>LONG OR SHORT HAIRED</b>
Whether you choose a pet with longhair or shorthair will depend on whether you are prepared to cope with the work & expense of owning a longhaired animal. Puppies & kittens don\'t have their full adult coats. A fluffy puppy who looks cute will grow into an expensive pet.</p>
<p><b>EXERCISE</b>
Builds strong muscles, improves health, creates \'feel good\' endorphins in the animals brain, helps creates a contented animal & stops the animal becoming bored.
Find out how much exercise your pet will need</p>
<p><b>TRAINING</b>
Dogs are pack animals & need you to be pack leader. Doing obedience classes with your dog will help you interact with your dog. Dogs love to learn. Dogs love the praise that comes with getting it right.
Find out about local obedience classes </p>
<p><b>DIET</b>
All animals are different and have different dietary needs. A good diet might not be the cheapest one but will give you a healthy pet.
Ask your vet about the best diet for your pet</P>'; }

include("include/footer.php"); ?>