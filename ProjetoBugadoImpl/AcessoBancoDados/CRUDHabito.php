<?php

include 'conexao.php'; //INICIA A CONEXÃO COM O SERVIDOR
//Fazer um switch de CRUD com a opção desejada de hábito
/*
  switch(opcaoCrud){
  }


  CREATE EXEMPLO
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com')";

  if ($conexao->query($sql) === TRUE) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conexao->close();

  CRIAR MULTIPLOS
  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('John', 'Doe', 'john@example.com');";
  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Mary', 'Moe', 'mary@example.com');";
  $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Julie', 'Dooley', 'julie@example.com')";

  if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conexao->close();


  READ
  $sql = "SELECT id, firstname, lastname FROM MyGuests";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
  } else {
  echo "0 results";
  }
  $conn->close();


UPDATE
 * $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


DELETE
 * $sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
 */
?>



