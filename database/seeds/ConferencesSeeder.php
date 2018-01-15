<?php

use App\Conference;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conferences')->delete();
        Conference::create(array('id' => 1, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ADBIS', 'name' => 'Conference on Advances in Databases and Information Systems',
            'rating' => 4, 'start_date' => '2018-01-05 00:00:00', 'end_date' => '2018-01-08 00:00:00', 'price' => 480, 'city_id'=>1));
        Conference::create(array('id' => 2, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'DB&IS', 'name' => 'International Baltic Conference on Databases and Information Systems',
            'rating' => 3, 'start_date' => '2018-06-01 00:00:00', 'end_date' => '2018-06-05 00:00:00', 'price' => 360, 'city_id'=>1));
        Conference::create(array('id' => 3, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'BIR', 'name' => 'International Conference on Perspectives in Business Informatics Research',
            'rating' => 4, 'start_date' => '2018-08-28 00:00:00', 'end_date' => '2018-08-30 00:00:00', 'price' => 420, 'city_id'=>2));
        Conference::create(array('id' => 4, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'VLDB', 'name' => 'International Conference on Very Large Data Bases',
            'rating' => 5, 'start_date' => '2018-08-29 00:00:00', 'end_date' => '2018-09-02 00:00:00', 'price' => 525, 'city_id'=>2));
        Conference::create(array('id' => 5, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'WWW', 'name' => 'International World Wide Web Conference',
            'rating' => 4, 'start_date' => '2018-10-27 00:00:00', 'end_date' => '2018-10-31 00:00:00', 'price' => 950, 'city_id'=>3));
        Conference::create(array('id' => 6, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ESWC', 'name' => 'European Semantic Web Conference',
            'rating' => 5, 'start_date' => '2018-05-28 00:00:00', 'end_date' => '2018-06-01 00:00:00', 'price' => 860, 'city_id'=>3));
        Conference::create(array('id' => 7, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'BigNovelTI', 'name' => 'Workshop on Novel Techniques for Integrating Big Data',
            'rating' => 2, 'start_date' => '2018-09-24 00:00:00', 'end_date' => '2018-09-24 00:00:00', 'price' => 120, 'city_id'=>4));
        Conference::create(array('id' => 8, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'DaS', 'name' => 'International Workshop on Data Science: Methodologies and Use-Cases',
            'rating' => 2, 'start_date' => '2018-02-20 00:00:00', 'end_date' => '2018-02-20 00:00:00', 'price' => 150, 'city_id'=>4));
        Conference::create(array('id' => 9, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'CAISE', 'name' => 'International Conference on Advanced Information Systems Engineering',
            'rating' => 4, 'start_date' => '2018-06-11 00:00:00', 'end_date' => '2018-06-15 00:00:00', 'price' => 650, 'city_id'=>5));
        Conference::create(array('id' => 10, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ER', 'name' => 'International Conference on Conceptual Modeling',
            'rating' => 4, 'start_date' => '2018-11-06 00:00:00', 'end_date' => '2018-11-09 00:00:00', 'price' => 750, 'city_id'=>5));
        Conference::create(array('id' => 11, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'EDBT', 'name' => 'International Conference on Extending Database Technology',
            'rating' => 4, 'start_date' => '2018-03-26 00:00:00', 'end_date' => '2018-03-29 00:00:00', 'price' => 590, 'city_id'=>6));
        Conference::create(array('id' => 12, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ICDT', 'name' => 'International Conference on Database Theory',
            'rating' => 4, 'start_date' => '2018-03-26 00:00:00', 'end_date' => '2018-03-29 00:00:00', 'price' => 590, 'city_id'=>6));
        Conference::create(array('id' => 13, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ICEIS', 'name' => 'International Conference on Enterprise Information Systems',
            'rating' => 3, 'start_date' => '2018-04-21 00:00:00', 'end_date' => '2018-04-24 00:00:00', 'price' => 535, 'city_id'=>7));
        Conference::create(array('id' => 14, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'ICIST', 'name' => 'International Conference on Information and Software Technologies',
            'rating' => 3, 'start_date' => '2018-10-04 00:00:00', 'end_date' => '2018-10-06 00:00:00', 'price' => 400, 'city_id'=>7));
        Conference::create(array('id' => 15, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'IoTBDS', 'name' => 'International Conference on Internet of Things, Big Data and Security',
            'rating' => 3, 'start_date' => '2018-02-15 00:00:00', 'end_date' => '2018-02-17 00:00:00', 'price' => 370, 'city_id'=>8));
        Conference::create(array('id' => 16, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'MEDI', 'name' => 'International Conference on Model and Data Engineering',
            'rating' => 4, 'start_date' => '2018-12-04 00:00:00', 'end_date' => '2018-12-07 00:00:00', 'price' => 500, 'city_id'=>8));
        Conference::create(array('id' => 17, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'BDCAT', 'name' => 'International Conference on Big Data Computing, Applications and Technologies',
            'rating' => 3, 'start_date' => '2018-12-05 00:00:00', 'end_date' => '2018-12-08 00:00:00', 'price' => 725, 'city_id'=>9));
        Conference::create(array('id' => 18, 'created_at' => '2017-11-07 16:10:46', 'updated_at' => '2017-11-07 16:10:46', 
            'acronym' => 'DEXA', 'name' => 'International Conference on Database and Expert Systems Applications',
            'rating' => 4, 'start_date' => '2018-09-03 00:00:00', 'end_date' => '2018-09-06 00:00:00', 'price' => 600, 'city_id'=>9));
    }
}
