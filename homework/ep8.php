<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie list | Laracasts</title>
</head>
<body>
    
    <?php 
        // Create an array of your favorites movies, including their respective release dates. Then, write a function that filters your list of movies down to only those that were released in the year 2000 or higher. Display the results in an unordered list.
    
        $movies = [
            [
                'name' => 'Shrek',
                'releaseYear' => '2001'
            ],
            [
                'name' => 'Tá Dando Onda',
                'releaseYear' => '2007'
            ],
            [
                'name' => 'De Volta para o Futuro',
                'releaseYear' => '1985'
            ],
            [
                'name' => 'Edward Mãos de Tesoura',
                'releaseYear' => '1990'
            ]
        ];

        function filterByReleaseYear($movies, $releaseYear) {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ((int) $movie['releaseYear'] >= $releaseYear) {
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        };

    ?>

    <ul>
        <?php foreach (filterByReleaseYear($movies, 2000) as $movie) : ?>
            <li>
                <a href="http://example.com">
                    <?= $movie['name'] . ' - ' . $movie['releaseYear']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>