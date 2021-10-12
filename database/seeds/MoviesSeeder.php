<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [

            [
                'genre_id' => 1,
                'title' => 'The World of The Married',
                'photo' => 'the-world-of-the-married-poster.jpg',
                'description' => 'Ji Sun-woo (Kim Hee-ae) is a revered family medicine doctor and the associate director
                at Family Love Hospital. She is married to Lee Tae-oh (Park Hae-joon), with whom she has a teenage son,
                Lee Joon-young (Jeon Jin-seo). Sun-woo seems to have everything from a successful career to a happy family,
                but unbeknownst to her, she is betrayed by her husband and friends.Meanwhile, Tae-oh dreams of becoming a
                famous movie director. He runs a small entertainment and film company with the support of his wife. Even
                though he loves and cares for his wife, Tae-oh sets himself up in a dangerous position with an extramarital
                affair.',
                'rating' => 5
            ],
            [
                'genre_id' => 1,
                'title' => 'Descendants of The Sun',
                'photo' => 'descendants-of-the-sun-poster.jpg',
                'description' => 'Descendants of the Sun tells the story of a special forces captain (Song Joong Ki) and a doctor
                (Song Hye Kyo) who fall in love while providing aid in a country dealing with a natural disaster
                and civil strife.',
                'rating' => 4
            ],
            [
                'genre_id' => 1,
                'title' => 'Itaewon Class',
                'photo' => 'itaewon-class-poster.jpg',
                'description' => 'On the first day of attending his new high school, Park Sae Ro Yi punches his classmate
                Jang Geun Won, who was bullying another classmate. The bully is the son of CEO Jang Dae Hee. The bully\'s
                father runs restaurant business Jagga where Park Sae Ro Yi’s own father works. CEO Jang Dae Hee demands
                to Park Sae Ro Yi that he apologizes to his son, but Park Sae Ro Yi refuses. Because of his refusal, Park
                 Sae Ro Yi gets expelled from school and his father gets fired from his job. Soon, an accident takes place.
                 Park Sae Ro Yi’s father dies in a motorcycle accident caused by his ex-classmate Jang Geun Won. Burning
                 with anger, Park Sae Ro Yi viciously beats Jang Geun Won. He is soon arrested and receives prison time
                 for violent assault. Park Sae Ro Yi decides to destroy the Jagga company and take revenge upon CEO Jang
                 Dae Hee and his son Jang Geun Won. Once Park Sae Ro Yi is released from prison, he opens a restaurant in
                 Itaewon, Seoul. Jo Yi Seo, who is popular on social media, joins Park Sae Ro Yi’s restaurant and works
                 there as a manager. She has feelings for Park Sae Ro Yi. ~~ Adapted from the popular Daum webtoon of the
                 same name.',
                'rating' => 5
            ],
            [
                'genre_id' => 1,
                'title' => 'Crash Landing on You',
                'photo' => 'crash-landing-on-you-poster.jpg',
                'description' => 'The absolute top secret love story of a chaebol heiress who made an emergency landing
                in North Korea because of a paragliding accident and a North Korean special officer who falls in love
                with her and who is hiding and protecting her.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => 'Spongebob Squarepants',
                'photo' => 'spongebob-squarepants-poster.jpg',
                'description' => 'In this lively animated adventure, undersea oddball SpongeBob SquarePants and his starfish
                friend, Patrick, embark on a quest to clear the name of Mr. Krabs, the owner of the Krusty Krab restaurant,
                who has been framed for stealing the crown of ocean deity King Neptune. Leaving the familiar confines of
                Bikini Bottom, SpongeBob and Patrick venture out towards Shell City, where they hope to find Neptune\'s crown,
                but numerous obstacles stand (or float) in their way.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => 'Hey Arnold!',
                'photo' => 'hey-arnold-poster.jpg',
                'description' => 'Arnold (Spencer Klein) and his pal, Gerald (Jamil Walker Smith), learn their beloved neighborhood is
                about to be torn down by a greedy developer named Scheck (Paul Sorvino) to build a mall. While the adults
                come up with a dodgy scheme, the friends try a more practical approach to the problem with the help of Helga
                (Francesca Marie Smith). The kids discover their neighborhood was designated as a historical landmark but
                they must prove it before Scheck moves in with his crew.',
                'rating' => 4
            ],
            [
                'genre_id' => 2,
                'title' => 'The Simpsons',
                'photo' => 'the-simpons-poster.jpg',
                'description' => 'The series is a satirical depiction of American life, epitomized by the Simpson family,
                which consists of Homer, Marge, Bart, Lisa, and Maggie. The show is set in the fictional town of Springfield
                and parodies American culture and society, television, and the human condition.',
                'rating' => 5
            ],
            [
                'genre_id' => 2,
                'title' => 'Dora the Explorer',
                'photo' => 'dora-the-explorer-poster.jpg',
                'description' => 'The series centers around Dora Marquez, a seven-year-old Latina girl, with a love of
                embarking on quests related to an activity that she wants to partake of or a place that she wants to go to,
                accompanied by her talking purple backpack and anthropomorphic monkey companion named Boots',
                'rating' => 3
            ],
            [
                'genre_id' => 3,
                'title' => 'Grey\'s Anatomy',
                'photo' => 'grey\'s-anatomy-poster.jpg',
                'description' => 'The series follows the life of Meredith Grey (Ellen Pompeo), the daughter of esteemed
                general surgeon Ellis Grey (Kate Burton), starting from her acceptance into the surgical residency
                program at the fictional Seattle Grace Hospital, (later named Seattle Grace Mercy West and finally,
                Grey Sloan Memorial Hospital).',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => 'The Withcer',
                'photo' => 'the-witcher-poster.jpg',
                'description' => 'It is based on the book series of the same name by Polish writer Andrzej Sapkowski.
                Set on a fictional, medieval-inspired landmass known as "the Continent", The Witcher explores the legend
                of Geralt of Rivia and princess Ciri, who are linked to each other by destiny.',
                'rating' => 4
            ],
            [
                'genre_id' => 3,
                'title' => 'The Big Bang Theory',
                'photo' => 'the-big-bang-theory-poster.jpg',
                'description' => 'The Big Bang Theory is a comedy about brilliant physicists, Leonard and Sheldon,
                who are the kind of "beautiful minds" that understand how the universe works. But none of that genius
                helps them interact with people, especially women. All this begins to change when a free-spirited beauty
                named Penny moves in next door.',
                'rating' => 5
            ],
            [
                'genre_id' => 3,
                'title' => 'Sherlock Holmes',
                'photo' => 'sherlock-holmes-poster.jpg',
                'description' => 'Sherlock Holmes is a private detective who has keen powers of observation. He lives
                at 221b Baker Street in London. He notices things that others simply don\'t and then he draws accurate
                conclusions about what he sees. He experiences strong mood swings, plays the violin, and is a master of
                deductive reasoning.',
                'rating' => 4
            ]
        ];

        foreach ($movies as $movie) {
            DB::table('movies')->insert($movie);
        }

    }
}
