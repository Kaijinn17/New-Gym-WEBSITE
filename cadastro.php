<?php include_once"config.php"; ?>

<?php

[

    'array' => 'MongoDB\Model\BSONArray',

    'document' => 'MongoDB\Model\BSONDocument',

    'root' => 'MongoDB\Model\BSONDocument',

]

$nome = $_POST['name'];
$telefone = $_POST['phone'];
$email = $_POST['email'];
$senha = $_POST['password'];
$data_nascimento = $_POST['date'];
$genero = $_POST['select'];

$sql = "INSERT INTO users(nome,telefone,email,senha,data_nascimento,genero)VALUES('$nome','$telefone','$email','$senha','$data_nascimento','$genero') ";


if (mysqli_query($conn, $sql)){

     header("Location: logar.php");

}

else{

     echo "Deu erro" . $sql . "<br>" . mysqli_error($conn);

}

class Person implements MongoDB\BSON\Persistable

{

    private $id;

    private $name;

    private $createdAt;

    public function __construct($name)

    {

        $this->id = new MongoDB\BSON\ObjectId;

        $this->name = (string) $name;

        $this->createdAt = new MongoDB\BSON\UTCDateTime;

    }

    function bsonSerialize()

    {

        return [

            '_id' => $this->id,

            'name' => $this->name,

            'createdAt' => $this->createdAt,

        ];

    }

    function bsonUnserialize(array $data)

    {

        $this->id = $data['_id'];

        $this->name = $data['name'];

        $this->createdAt = $data['createdAt'];

    }

}

$collection = (new MongoDB\Client)->test->persons;

$result = $collection->insertOne(new Person('Bob'));

$person = $collection->findOne(['_id' => $result->getInsertedId()]);

var_dump($person);


mysqli_close($conn);

?>
