<?php
require_once 'phplibrary.php';

$allMovies = [
    [
        'title' => 'The Godfather',
        'release' => 1972,
        'rating' => '9.2',
        'genre' => ['crime', 'drama']
    ],
    [
        'title' => 'The Godfather: Part II',
        'release' => 1974,
        'rating' => '9.0',
        'genre' => ['crime', 'drama']
    ],
    [
        'title' => 'The Dark Knight',
        'release' => 2008,
        'rating' => '9.0',
        'genre' => ['action', 'crime', 'drama']

    ],
    [
        'title' => 'The Good, The Bad, and The Ugly',
        'release' => '1966',
        'rating' => '8.9',
        'genre' => ['western']
    ],
    [
        'title' => 'Forest Gump',
        'release' => 1994,
        'rating' => '8.7',
        'genre' => ['comedy', 'drama', 'romance']
    ],
    [
        'title' => 'Seven Samurai',
        'release' => 1954,
        'rating' => '8.6',
        'genre' => ['adventure', 'drama']
    ],
    [
        'title' => 'Back to the Future',
        'release' => 1985,
        'rating' => '8.5',
        'genre' => ['adventure', 'comedy', 'sci-fi']
    ],
    [
        'title' => 'The Lion King',
        'release' => 1994,
        'rating' => '8.5',
        'genre' => ['animation', 'adventure', 'drama']
    ],
    [
        'title' => 'Alien',
        'release' => 1979,
        'rating' => '8.5',
        'genre' => ['horror', 'sci-fi']
    ],
    [
        'title' => '2001: A Space Odyssey',
        'release' => 1968,
        'rating' => '8.3',
        'genre' => ['adventure', 'sci-fi']
    ],
];

function getMoviesByGenre($genre, $allMovies){
    $movies = [];

    foreach($allMovies as $movie){
        if(in_array($genre, $movie['genre'])){
            $movies[]=$movie;
        }
    }
    return $movies;
}

function getMoviesByTitle($genre, $allMovies){
    $movies = [];

    foreach($allMovies as $movie){
            //if $title exists in $movie['title'], add it to the $movies array
        if (strpos($movie['title'], $title) !== false){
                $movies[]=$movie;
        }
    }
    return $movies;
}



function pageController($allMovies)
{
    // If the $_GET request is empty, show every movie
    // if(!isset($_GET)){
    //     $data['movies']= $allMovies;
    // }
    // If $_GET['genre'] holds 'adventure', make $movies hold movies with 'adventure' as a genre.

    $data = [];
    var_dump($_GET);
    $genre = inputGet('genre');
    $title = inputGet('title');
    $release = inputGet('release');

    // set $data['movies'] to hold all movies (unless another request is made.)


 //in class solution
    //if the $_GET request is empty, show every movie
    if(empty($_GET)){
        $data['movies'] = $allMovies;
    } elseif (!empty($genre) && empty($title)) {
        //get all movies with that genre
        //push them onto an array called $movies
        // set $data['movies'] to hold $movies
        // $data['movies'] = $allMovies;

        // $movies = [];

        // foreach($allMovies as $movie){
        //     if(in_array($genre, $movie['genre'])){
        //         //array_push $movie onto the array $movies
        //         $movies[] = $movie;
        //     }
        // }
        $data['movies'] = getMoviesByGenre($genre, $allMovies);

    } elseif (!empty($title) && empty($genre)) {
        //find movies by title
        //push movies w/ that title onto an array called $movies
        // set $data['movies'] to hold $movies.....
        // $movies=[];

        // foreach($allMovies as $movie){
        //     //if $title exists in $movie['title'], add it to the $movies array
        //     if (strpos($movie['title'], $title) !== false){
        //         $movies[]=$movie;
        //     }
        // }

        $data['movies'] = getMoviesByTitle($genre, $allMovies);

    } elseif (!empty($title) && !empty($genre)){
        //find movies w/both that title and that genre
        //filter to get movies with only the provided genre
      $moviesWithGenre = getMoviesByGenre($genre, $allMovies);

      //searching only the movies with that genre for the given title
      $moviesWithGenreAndTitle = getMoviesByTitle($title, $moviesWithGenre);

      $data['movies'] = $moviesWithGenreAndTitle;

    } else {
        $data['movies'] = $allMovies;
    }

    if(!empty($release)){
        $movies = [];

        foreach($allMovies as $movie){
            if($movie['release'] > $release) {
                $movies[] = $movie;
            }
        }
        $data['movies']= $movies;
    }

    return $data;

}

extract(pageController($allMovies));

?>


<!--     //If the genre has something and title is empty, search by genre

    //If the title has something nd genre is empty search by title

    // If both the title and genre have something, show movies with title with that genre







    // if(isset($_GET['genre'])){
        //make a new array called $movies
        //iterate thru the allMovies array
        //if any movie has the genre of sci fi, push that array onto $movies;
        // $genre= $_GET['genre'];
        // $movies = [];

        // foreach($allMovies as $movie){
        //     if (in_array($genre, $movie['genre'])){

        //         $movies[] = $movie;
        //     }
        // }

        // $data['movies'] = $movies;

    //Filter by Release date
    // } elseif (isset($_GET['release'])){
    //     $release= $_GET['release'];
    //     $movies = [];

    //     foreach($allMovies as $movie){
    //         if ($movie['release']>=2000){

    //             $movies[] = $movie;
    //         }
    //     }

    //     $data['movies'] = $movies;

    //Filter by Title
    // } elseif (isset($_GET['title'])){

    //     $title= $_GET['title'];
    //     $movies = [];

    //     foreach($allMovies as $movie){
    //         if (in_array($title, $movie['title'])){

    //             $movies[] = $movie;
    //         }
    //     }

    //     $data['movies'] = $movies;   

    // } else {
        //set $data['movies'] to hold all movies(unless another request is made)
//         $data['movies'] = $allMovies;
//     }

//     return $data;
// }

// extract(pageController($allMovies)); -->


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <main class="container">
        
        <h1>Welcome to MovieLister!</h1>

        <section class="form">
            <form method="GET" action="movies.php">
                <label for='title'>Title</label>
                <input type='title' name='title' placeholder='Search by movie title' id='title'>
                <!-- Add an input to search by "title" -->
                <!-- Add a form that has an input for "genre" -->
                <!-- Add submit button -->
   
                <label for='genre'>Genre</label>
                <input type='genre' name='genre' placeholder='Search by Genre' id='title'>

                <button type='submit'>Search now!</button>
                <!-- Add an input to search by "title" -->
                <!-- Add a form that has an input for "genre" -->
                <!-- Add submit button -->
            </form>
        </section>


        <section class="links">
            <!-- Add a link that will show all movies  -->
            <a href="movies.php">Show all movies</a>
            &nbsp

            <!-- Add a link that will show only movies with a release date after 2000 -->
            <a href="movies.php?release=greaterthan2000">All movies released after 2000</a>
            &nbsp
            <!-- Add a link that shows all movies w/ the comedy genre -->
            <a href="movies.php?genre=comedy">Show only comedies</a>
            &nbsp
            <!-- Add a link that shows all movies w/ the sci-fi genre -->
            <a href="movies.php?genre=sci-fi">Show only Sci-Fi</a>

        </section>
        <section class="movies">
            <!-- Show all the movies here -->
            <!-- Iterate through $movies array to show all or the filtered results-->
            <?php foreach($movies as $movie): ?>
                <div>
                    <h3>Title: <?= $movie['title'] ?></h3>
                    <p>Released in: <?= $movie['release'] ?></p>
                    <p>Genres: <?= implode(", ", $movie['genre']) ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>