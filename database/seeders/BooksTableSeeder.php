<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;
use Faker\Generator as faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {

        $books = [
            [
                "ISBN" => "9788820355959",
                "title" => "Il nome della rosa",
                "author" => "Umberto Eco",
                "genre" => "Giallo storico",
                "description" => "Un frate francescano e un novizio devono risolvere una serie di misteriosi omicidi avvenuti in un'abbazia benedettina del XIV secolo.",
                "cover" => "https://m.media-amazon.com/images/I/811MKCe5XdL.jpg",
                "release_date" => "1980-09-01"
            ],
            [
                "ISBN" => "9788807831184",
                "title" => "La solitudine dei numeri primi",
                "author" => "Paolo Giordano",
                "genre" => "Romanzo",
                "description" => "Alice e Mattia sono due persone sole e ferite che cercano conforto l'uno nell'altra. Ma il loro amore è destinato a fallire a causa dei loro dolori interiori.",
                "cover" => "https://m.media-amazon.com/images/I/81GO0cg5GEL.jpg",
                "release_date" => "2008-09-05"
            ],
            [
                "ISBN" => "9788806240928",
                "title" => "Harry Potter e la Pietra Filosofale",
                "author" => "J.K. Rowling",
                "genre" => "Fantasy",
                "description" => "Il primo libro della celebre serie di Harry Potter, che segue le avventure del giovane mago mentre scopre il suo destino e affronta il malvagio Lord Voldemort.",
                "cover" => "https://m.media-amazon.com/images/I/71rhbCjWtjL.jpg",
                "release_date" => "1997-06-26"
            ],
            [
                "ISBN" =>  "9788807891238",
                "title" =>  "La ragazza di Bube",
                "author" =>  "Carlo Cassola",
                "genre" =>  "Romanzo",
                "description" => "La storia d'amore tra Mara e Bube, un ex partigiano che cerca di vivere dopo la fine della guerra.",
                "cover" => "https://m.media-amazon.com/images/I/81IsBoGhWLL.jpg",
                "release_date" =>  "1960-01-01"
            ],
            [
                "ISBN" => "9788884613711",
                "title" => "1984",
                "author" => "George Orwell",
                "genre" => "Distopia",
                "description" => "In un mondo totalitario, Winston Smith inizia a ribellarsi contro il controllo del Partito e a cercare la verità.",
                "cover" => "https://m.media-amazon.com/images/I/81Sf+7EhIeL.jpg",
                "release_date" => "1949-06-08"
            ],
            [
                "ISBN" => "9788805671148",
                "title" => "Se una notte d'inverno un viaggiatore",
                "author" => "Italo Calvino",
                "genre" => "Romanzo sperimentale",
                "description" => "Un libro che parla di come leggiamo i libri e delle nostre aspettative dietro ogni lettura.",
                "cover" => "https://m.media-amazon.com/images/I/514mZeWdN1L.jpg",
                "release_date" => "1979-01-01"
            ],
            [
                "ISBN" => "9788807887665",
                "title" => "Il deserto dei Tartari",
                "author" => "Dino Buzzati",
                "genre" => "Romanzo",
                "description" => "La storia di Giovanni Drogo, un ufficiale che passa la vita in una fortezza in attesa di una guerra che non arriva mai.",
                "cover" => "https://m.media-amazon.com/images/I/51OW1OoalYL._SX320_BO1,204,203,200_.jpg",
                "release_date" => "1940-09-01"
            ],
            [
                "ISBN" => "9788104621266",
                "title" => "Fahrenheit 451",
                "author" => "Ray Bradbury",
                "genre" => "Distopia",
                "description" => "In un mondo in cui i libri sono proibiti, il pompiere Montag inizia a chiedersi se ciò che sta facendo sia giusto.",
                "cover" => "https://m.media-amazon.com/images/I/71bMxu-0CYL.jpg",
                "release_date" => "1953-10-19"
            ],
            [
                "ISBN" =>  "9788804668200",
                "title" =>  "La luna e i falò",
                "author" =>  "Cesare Pavese",
                "genre" =>  "Romanzo",
                "description" =>  "Un uomo torna nel suo paese natale in Piemonte e si confronta con il passato e la solitudine.",
                "cover" =>  "https://m.media-amazon.com/images/I/71TMaCMviwL.jpg",
                "release_date" =>  "1950-01-01"
            ],
            [
                "ISBN" => "9788804705021",
                "title" => "Norwegian Wood",
                "author" => "Haruki Murakami",
                "genre" => "Romanzo",
                "description" => "La storia d'amore tra Toru e Naoko, due giovani studenti universitari nella Tokyo degli anni '60.",
                "cover" => "https://m.media-amazon.com/images/I/81RARTnoWjL.jpg",
                "release_date" => "1987-08-28"
            ],
            [
                "ISBN" => "9788806149120",
                "title" => "La verità sul caso Harry Quebert",
                "author" => "Joël Dicker",
                "genre" => "Thriller",
                "description" => "Un giovane scrittore diventa l'indagato principale in un caso di omicidio in una cittadina del Maine.",
                "cover" => "https://m.media-amazon.com/images/I/61Ww1v37g5L.jpg",
                "release_date" => "2012-09-27"
            ],
            [
                "ISBN" => "9780804666632",
                "title" => "Il fu Mattia Pascal",
                "author" => "Luigi Pirandello",
                "genre" => "Romanzo",
                "description" => "Mattia Pascal, un uomo che si credeva morto, cambia identità e cerca una nuova vita.",
                "cover" => "https://m.media-amazon.com/images/I/61xeVyRsUmL.jpg",
                "release_date" => "1904-11-12"
            ],
            [
                "ISBN" => "9788804006572",
                "title" => "Io uccido",
                "author" => "Giorgio Faletti",
                "genre" => "Thriller",
                "description" => "Un serial killer sta seminando il panico in una città. L'unico che può fermarlo è un ex poliziotto ora scrittore di gialli.",
                "cover" => "https://m.media-amazon.com/images/I/71zSMneh0HL.jpg",
                "release_date" => "2002-11-05"
            ],
            [
                "ISBN" => "9788850634387",
                "title" => "La ragazza del treno",
                "author" => "Paula Hawkins",
                "genre" => "Thriller",
                "description" => "Una donna ossessionata dalla vita di una coppia perfetta che vede dalla finestra del treno diventa la principale testimone di una scomparsa.",
                "cover" => "https://m.media-amazon.com/images/I/91PpaZyj0VL.jpg",
                "release_date" => "2015-01-13"
            ],
            [
                "ISBN" => "9780822719689",
                "title" => "Inferno",
                "author" => "Dan Brown",
                "genre" => "Thriller",
                "description" => "Il professor Langdon si risveglia in un ospedale a Firenze senza ricordare come ci sia arrivato. La sua corsa contro il tempo per decifrare i misteri della Divina Commedia e salvare il mondo dal cataclisma è cominciata.",
                "cover" => "https://m.media-amazon.com/images/I/61cUIkDqIDL.jpg",
                "release_date" => "2013-05-14"
            ],
            [
                "ISBN" => "9788868520089",
                "title" => "La biblioteca dei morti",
                "author" => "Glenn Cooper",
                "genre" => "Thriller",
                "description" => "Un archeologo scopre un manoscritto millenario che contiene una lista di nomi, tra cui il suo, che sembrano essere quelli delle vittime di una serie di omicidi che devono ancora accadere.",
                "cover" => "https://m.media-amazon.com/images/I/61nYTyVlklL.jpg",
                "release_date" => "2009-01-01"
            ],
            [
                "ISBN" => "9788804708095",
                "title" => "Il suggeritore",
                "author" => "Donato Carrisi",
                "genre" => "Thriller",
                "description" => "La prima indagine del criminologo Goran Gavila: un assassino che imita i delitti commessi dai più noti serial killer del passato semina il panico nella città di Roma.",
                "cover" => "https://m.media-amazon.com/images/I/414arqYQj2L.jpg",
                "release_date" => "2009-06-04"
            ],
            [
                "ISBN" => "9788804637159",
                "title" => "L'amica geniale",
                "author" => "Elena Ferrante",
                "genre" => "Romanzo",
                "description" => "La storia dell'amicizia tra due ragazze di Napoli negli anni '50, che cercano di sfuggire alla povertà e alla violenza del loro quartiere, ma vengono divise dai loro sogni e dalle loro scelte di vita.",
                "cover" => "https://m.media-amazon.com/images/I/517pPERPLXL._SX498_BO1,204,203,200_.jpg",
                "release_date" => "2011-10-18"
            ],
            [
                "ISBN" => "9788804689035",
                "title" => "La vita bugiarda degli adulti",
                "author" => "Elena Ferrante",
                "genre" => "Romanzo",
                "description" => "La storia di una ragazza che scopre la verità sulla sua famiglia e sulla sua città, Napoli, attraverso l'incontro con uno zio misterioso e ribelle, e il confronto con la propria adolescenza turbolenta.",
                "cover" => "https://m.media-amazon.com/images/I/51tqFeCIARL.jpg",
                "release_date" => "2019-11-07"
            ],
            [
                "ISBN" => "9788804708217",
                "title" => "L'ipotesi del male",
                "author" => "Donato Carrisi",
                "genre" => "Thriller",
                "description" => "Un nuovo serial killer semina il panico nella città di Roma, e il criminologo Goran Gavila è costretto a fare i conti con il suo passato per risolvere il caso.",
                "cover" => "https://m.media-amazon.com/images/I/71Oo5Wg+GzL.jpg",
                "release_date" => "2016-11-15"
            ],

        ];
        $categories = Category::all()->pluck('id');
        foreach ($books as $book) {
            $newBook = new Book();
            $newBook->cover = $book['cover'];
            $newBook->category_id = $faker->randomElement($categories);
            $newBook->title = $book['title'];
            $newBook->author = $book['author'];
            $newBook->ISBN = $book['ISBN'];
            $newBook->genre = $book['genre'];
            $newBook->release_date = $book['release_date'];
            $newBook->description = $book['description'];
            $newBook->save();
        }
    }
}

    // public function run(Faker $faker)
    // {
    //     for ($i = 0; $i < 50; $i++) {
    //         $newBook = new Book();
    //         $newBook->cover = $faker->imageUrl(640, 480, 'books');
    //         $newBook->title = $faker->realTextBetween(5, 20);
    //         $newBook->author = $faker->firstName() . ' ' . $faker->lastName();
    //         $newBook->ISBN = $faker->isbn13();
    //         $newBook->genre = $faker->randomElement(['romance', 'thriller', 'horror', 'mystery', 'fantasy', 'biography', 'history']);
    //         $newBook->release_date = $faker->date();
    //         $newBook->description = $faker->paragraph();
    //         $newBook->save();
    //     }
    // }
