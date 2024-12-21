<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome to kolfe keranio subcity</h1>
    <h3>what is your complain</h3>
    
    <form action="" method=" post">
      
    <div class="check">
        <div class="checkb">
        <input type="checkbox"name="checkbox1" value="poor service">
      <label for="">poor sercice</label>
          </div>
      <div class="checkb">
        <input type="checkbox"name="checkbox2" >
        <label for="">lost file</label>
      </div>
      <div class="checkb">
        <input type="checkbox"name="checkbox3" >
        <label for="">it took more than a week to sereve me</label>
      </div>
      <div class="checkb">
        <input type="checkbox"name="checkbox4" >
        <label for="">didn't get service at working hour/no one was there/label>
      </div>
      <div class="checkb">
        <input type="checkbox"name="checkbox5" >
        <label for="">am asked to give bribe</label>
      </div>
    </div>
    
    
    <div class="container">
        <h3>answer some questions</h3>
        <h4>1-poor 2-bad 3-average 4-very good 5-excelent </h4>
        <form id="evaluationForm" method="post">
            <div class="group">
                <h5>1.did you get a good service:</h5>
                <div class="rating" id="answers">
                    <input type="radio" name="answers"  id="ans1" required><label >1</label>
                    <input type="radio" name="answers"  id="ans2"><label >2</label>
                    <input type="radio" name="answers"  id="ans3"><label >3</label>
                    <input type="radio" name="answers" id="ans4"><label >4</label>
                    <input type="radio" name="answers"  id="ans5"><label >5</label>
                </div>
            </div>
            <div class="group">
                <h5>2. does it get long to gent answers:</h5>
                <div class="rating" id="answes2">
                    <input type="radio" name="answes2"  id="an1" required><lable>1</label>
                    <input type="radio" name="answes2"  id="an2"><label >2</label>
                    <input type="radio" name="answes2"  id="an3"><label >3</label>
                    <input type="radio" name="answes2"  id="an4"><lable>4</label>
                    <input type="radio" name="answes2"  id="an5"><lable>5</label>
                </div>
            </div>
            <div class="group">
                <h5>3 are they avaliable on their working hour</h5>
                <div class="rating" id="ans3">
                    <input type="radio" name="ans3"  id="a1" required><label >1</label>
                    <input type="radio" name="ans3" id="a2"><label>2</label>
                    <input type="radio" name="ans3"  id="a3"><label>3</abe>
                    <input type="radio" name="ans3" id="a4"><lable>4</label>
                    <input type="radio" name="ans3"  id="a5"><label>5</label>
                </div>
            </div>
            <div class="group">
                <h5>4 is there to much wating line:</h5>
                <div class="rating" id="line">
                    <input type="radio" name="line" " id="li1" required><label>1</label>
                    <input type="radio" name="line"  id="li2"><lable>2</label>
                    <input type="radio" name="line"  id="li3"><label >3</label>
                    <input type="radio" name="line"  id="li4"><label>4</label>
                    <input type="radio" name="line"  id="li5"><label>5</label>
                </div>
            </div>
            <div class="group">
                <h5>5 are they accountable for ther action:</h5>
                <div class="rating" id="acc">
                    <input type="radio" name="acc" " id="ac1" required><label>1</label>
                    <input type="radio" name="acc"  id="ac2"><lable>2</label>
                    <input type="radio" name="acc"  id="ac3"><label >3</label>
                    <input type="radio" name="acc"  id="ac4"><label>4</label>
                    <input type="radio" name="acc"  id="ac5"><label>5</label>
                </div>
            </div>
            <div class="group">
                <h5>6 are they polite:</h5>
                <div class="rating" id="pol">
                    <input type="radio" name="pol" " id="po1" required><label>1</label>
                    <input type="radio" name="pol"  id="po2"><lable>2</label>
                    <input type="radio" name="pol"  id="po3"><label >3</label>
                    <input type="radio" name="pol"  id="po4"><label>4</label>
                    <input type="radio" name="pol"  id="po5"><label>5</label>
                </div>
            </div>
            
            <h3>comment (optional)</h3>
            <input type="text" name="comment"placeholder="type here">
            <input type="submit"name="submit"id="btns">
        </form>
        
    </div>
</form>
 
</body>
</html>