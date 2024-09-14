<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>Hello this is form staff Dashboard of view </P>
           
      @foreach($staffinfos as $staffinfo)
     <li> {{$staffinfo['staffName']}}</li>
      @endforeach
     

    
               
                
         
         
               
          
       
    
    
</body>
</html>