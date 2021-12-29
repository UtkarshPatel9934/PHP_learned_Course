<?php

// file IO - open and read the file


/* 

- opening a file
- reading a file
- writing a file
- cloasing a file

 */


//  $fileName = "docs/content.txt"; // gettting a path of the astual file!






/* 
# Adding Content to the file

// opening a file

# fopen(<fileName>, 'Mode_Name')

$file = fopen($fileName, 'w');

if($file == false)
{
	echo "There is problem in opening";
}


$fileContent = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque unde velit illum quod laudantium eos perferendis dignissimos corporis excepturi delectus deleniti omnis mollitia repudiandae, quam quae incidunt sapiente ab, quisquam maxime? Aperiam asperiores quaerat quos modi excepturi tempora consectetur debitis nam quia fuga laborum aspernatur voluptas deserunt exercitationem sapiente enim, eligendi rerum! Veniam dolore et vel, cupiditate culpa corporis iusto reprehenderit, consequuntur, sequi sed suscipit nemo fugit accusamus eos quibusdam? Quia, laboriosam illum ab, perspiciatis magnam provident aliquam repellendus error hic iste eos voluptatibus ad vitae? Voluptatem, ipsa nisi.";

// to write in the file - fwrite

// fwrite(<file handler>, <content in it>)

if(fwrite($file, $fileContent))
{
	echo "Great, Content has been added to the file 👍";
	
	echo "<br>";
	echo "<br>";
	echo "<hr>";
	echo "The content is : " . $fileContent;
	echo "<hr>";
}
else
{
	echo "Opps! , cannot able to add content 👎";
}


fclose($file);
# Adding Content to the file */



// Reading files content

$fileName = "docs/content.txt"; // getting the path name

// opening file in read mode
$file = fopen($fileName, 'r');

$fileSize = filesize($fileName);

echo $fileSize*0.000001 . " MB";

// fread(<file handler>, <length of the file or file size>)
$content = fread($file, $fileSize);

// closing the file
fclose($file);


echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo $content;
echo "<hr>";

