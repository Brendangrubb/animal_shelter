# **Animal Shelter**
#### Jason Brown & Brendan Grubb, 2/21/2017

&nbsp;
## Description
A program for an animal shelter which tracks the animals they currently have needing homes based on type (ex. cat/dog/bunny). Build out the following features that let a shelter worker:

Add types of animals to the system. A type should be something like cat, dog, bunny, etc.
Add a animal to the system. An animal should have a name, gender, date of admittance, and breed. When it gets added to the system, it should be added as a particular type.
List animals by breed or type alphabetically. (Hint: make separate pages for each of these, but write methods for these sorts)
List animals starting with the ones who have been in the shelter the longest.




&nbsp;
## Specifications

|Behavior|Input 1|Output|
|--------|-------|------|
| A worker inputs a name of animal. | "Fido" | "Fido" |
| A worker inputs a gender of an animal. | "Fido, male" | "Fido, male" |
| A worker inputs a breed. | "German Shepherd" | "Fido, male, German Shepherd" |
| A worker inputs the date of admittance. | "1-4-2017" | "Fido, male, German Shepherd, 1-4-2017" |
| A worker inputs an animal into a type. | "dog" | "Fido has been added to the dog category" |
|  |  |  |

&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/animal_shelter)
* Download the zip file via the green button
* Unzip the file and open the **_animal_shelter-master_** folder
* Open Terminal, navigate to **_animal_shelter-master_** project folder, type **_composer install_** and hit enter
* Navigate Terminal to the **_animal_shelter-master/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* SQL
* Apache
* Twig
* PHPUnit
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Jason Brown & Brendan Grubb

This software is licensed under the GPL license
