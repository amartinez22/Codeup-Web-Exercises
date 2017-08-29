<?php
require_once "Model.php";
/**
 * A Class for interacting with the national_parks database table
 *
 * contains static methods for retrieving records from the database
 * contains an instance method for persisting a record to the database
 *
 * Usage Examples
 *
 * Retrieve a list of parks and display some values for each record
 *
 *      $parks = Park::all();
 *      foreach($parks as $park) {
 *          echo $park->id . PHP_EOL;
 *          echo $park->name . PHP_EOL;
 *          echo $park->description . PHP_EOL;
 *          echo $park->areaInAcres . PHP_EOL;
 *      }
 * 
 * Inserting a new record into the database
 *
 *      $park = new Park();
 *      $park->name = 'Acadia';
 *      $park->location = 'Maine';
 *      $park->areaInAcres = 48995.91;
 *      $park->dateEstablished = '1919-02-26';
 *
 *      $park->insert();
 *
 */
class Park extends Model
{
    ///////////////////////////////////
    // Static Methods and Properties //
    ///////////////////////////////////

    /**
     * our connection to the database
     */
    public static $dbc = null;
    public static $table = 'national_parks';
    /**
     * establish a database connection if we do not have one
     */

    // public static function dbConnect() {
    //     require 'db_connect.php';

    //     if (! is_null(self::$dbc)) {
    //         return;
    //     }
    //     self::$dbc = $dbc;
    // }

    /**
     * returns the number of records in the database
     */
    public static function count() {
        self::dbConnect();

        $countQuery = "SELECT COUNT(*) FROM national_parks";
        $stmt = self::$dbc->query($countQuery);
        $count = (int) $stmt->fetchColumn();
     
        return $count;

        }
        // TODO: call dbConnect to ensure we have a database connection
        // TODO: use the $dbc static property to query the database for the
        //       number of existing park records


    /**
     * returns all the records
     */
    public static function all() {
        // TODO: call dbConnect to ensure we have a database connection
        self::dbConnect();
        // TODO: use the $dbc static property to query the database for all the
        //       records in the parks table
        // TODO: iterate over the results array and transform each associative
        //       array into a Park object
        // TODO: return an array of Park objects
        $selectString = "SELECT * FROM national_parks";

        $stmt = self::$dbc->query($selectString);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $parks = [];

        foreach($results as $result){
            $park = new Park();
            $park->id = $result['id'];
            $park->name = $result['name'];
            $park->location = $result['location'];
            $park->areaInAcres = $result['area_in_acres'];
            $park->dateEstablished = $result['date_established'];
            $park->description = $result['description'];

            $parks[] = $park;
        
        }

        return $parks; 
        
        }

    // * returns $resultsPerPage number of results for the given page number

    public static function paginate($pageNo, $resultsPerPage = 4) {
        self::dbConnect();
        // TODO: call dbConnect to ensure we have a database connection
        // TODO: calculate the limit and offset needed based on the passed
        //       values
        // TODO: use the $dbc static property to query the database with the
        //       calculated limit and offset
        $limit = $resultsPerPage;
        $offset =($pageNo * $resultsPerPage) - $resultsPerPage;
        // TODO: return an array of the found Park objects
        $selectString = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset";
        
        $stmt = self::$dbc->prepare($selectString);

        $stmt->bindValue(":limit", (int) $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", (int) $offset, PDO::PARAM_INT);

        $stmt->execute(); 

        // $rows = $stmt->fetchAll(PDO::FETCH_OBJ);

        // return $rows;

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $output = [];

        foreach($results as $result){
            $park = new Park();
            $park->id = $result['id'];
            $park->name = $result['name'];
            $park->location = $result['location'];
            $park->dateEstablished = $result['date_established'];
            $park->areaInAcres=$result['area_in_acres'];
            $park->description=$result['description'];

            $output[] = $park;
        }

        return $data;

        }


    /////////////////////////////////////
    // Instance Methods and Properties //
    /////////////////////////////////////

    /**
     * properties that represent columns from the database
     */
    public $id;
    public $name;
    public $location;
    public $dateEstablished;
    public $areaInAcres;
    public $description;

    /**
     * inserts a record into the database
     */
    protected function insert() {
        // TODO: call dbConnect to ensure we have a database connection
        self::dbConnect();

        $insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
        VALUES(:name, :location, :date_established, :area_in_acres, :description);";
        $stmt = self::$dbc->prepare($insert);
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $this->date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $this->area_in_acres, PDO::PARAM_STR);    
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);    
        
        $stmt->execute(); 
        $this->id = self::$dbc->lastInsertId();

    }


    protected function update() {
        self::dbConnect();

        $updatedString = "UPDATE " . static::$table . " SET 
        name= :name, 
        location= :location, 
        date_established= :date_established, 
        area_in_acres= :area_in_acres, 
        description= :description 
        WHERE id= :id";

        $stmt = self::$dbc->prepare($updatedString);

        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $this->date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $this->area_in_acres, PDO::PARAM_STR);    
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);    
        $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
        
        $stmt->execute(); 
    }


    public static function find($id)
    {
        self::dbConnect();

        $query = "SELECT * from " . static::$table . " where id = :id";
        $statement = self::$dbc->prepare($query);

        $statement->bindValue(':id', $id, PDO:: PARAM_INT);
        $statement->execute();

        $result=$statement->fetch(PDO::FETCH_ASSOC);
        
       $park = new Park($result);

       return $park;
    }

}


// Insert a record into the database

        // TODO: use the $dbc static property to create a perpared statement for
        //       inserting a record into the parks table
        // TODO: use the $this keyword to bind the values from this object to
        //       the prepared statement
        // TODO: excute the statement and set the $id property of this object to
        //       the newly created id

