# phpTips
mæd php trix for prog for web II


# lese fra csv fil
$file_handle = fopen('./data/test.csv', 'r');


while(!feof($file_handle))

{
 print_r(fgetcsv($file_handle));
}

fclose($file_handle);
