<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Questions</title>
</head>
<style>
*{
    font-family: 'Montserrat', sans-serif;
    color: #041159;
    }

    html{
        overflow-y: scroll;
        overflow-x: hidden;
    }

  
    .container-fluid{
      
      position:absolute;
      display:flex;
      padding-top: 5%;
      padding-left: 15%;
      width: 100%;
  }

   
    .registration-header{
        font-weight: 800;
        font-size:1.5em;
    }

    .form-control{
        border-radius: 50px;
        width: 100%;
        padding: 1.5em;
    }

    .registration-button{
        background-color: #F27457;
        font-weight: 700;
        font-size: 1vw;
        border-radius: 25px;
        padding: 2%;
        padding-right: 7%;
        padding-left: 7%;
        color: #8C2E36;
        border: none;
    }

    .registration-button:hover{
      background-color: #1D28F2;
      color: #ffff;
    }

    .need-account{
        text-align: center;
    }
    .signin-link{
        color: #231773;
    }

    .login-container{
        padding-top: 5%;
    }


    
    .login{
    padding-top: 8%;
  }

  .question-container{
    width: 55vw;
    height: 75vh;	
    overflow-y:auto;
  }

  .table-container{
    height: 75vh;
    padding-left: 30%;
    overflow-y: scroll;
  }

  .text-area{
    border-radius: 10px;
    resize: none;
    width: 100%;
  }

  .suggestions{
    border-radius: 10px;
    resize: none;
    width: 330%;
  }

  .inputs{
    display: flex;
    padding-left: 10%;
  }

  .text-inputs{
    display:flex;
  }

  
  .select{
        border-radius: 50px;
        width: 100%;
        padding: .9em;
        border: 1px solid #d7d7d7;
    }

  .forms{
    padding-top: 2%;
  }

  .radio{
    padding-left: 3%;
  }
</style>
<body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-4">

    <div class="row">
    <?= form_open_multipart('Question/save/'.$academicyear['id']) ?>
      <div id="emailHelp" class="form-text">
          <h1 class="registration-header">Add Evaluation Questions</h1>
      </div>
      
      <input type="hidden" id="custId" class="custId" name="academic_id" value="<?= $academicyear['id'] ?>">

      <div class="mb-3">
      <textarea class="form-control text-area" name="question" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>

    <div class="mb-3 inputs">
    
    

    <div class="row">
  <div class="w-100"></div>
  <div class="col">
  
    </div>
    <div class="col">
   
</div>
   
    </div>
    </div>
<button type="submit" class="btn btn-primary registration-button">Save Question</button>
    </form>
  </div>
  </div>







  <!--formsres-->


  <div class="col-8">
  <?= form_open_multipart('Answers/saveanswers/'.$academicyear['id']) ?>
  <b>RESPONDENTS INFORMATION</b>
   
    <div class="row forms">
      <div class="col">
  <div class="mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email" id="InputForName" value="">
  </div>
  </div>
  <div class="col">
  <div class="mb-3">
    <input type="text" name="name" class="form-control" placeholder="Name (optional)" id="InputForName" value="">
  </div>
  </div>
  </div>


  <div class="row forms">
      <div class="col">
  <div class="mb-3">
  <select class="form-select select" aria-label="Default select example">
  <option selected>Select Unit</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  </div>
  <div class="col">
  <select class="form-select select" aria-label="Default select example">
  <option selected>Select Class</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  </div>




  <div class="row forms radio">



      <div class="col">
        <b>AGE</b>
  <div class="mb-3">
  <div class="form-check">
  <input class="form-check-input" type="radio" name="age" value="20-29" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    20-29
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="age"  value="30-39" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    30-39
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="age" value="40-49" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    40-49
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="age" value="50-59" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    50-59
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="age" value="60-Above" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    60-Above
  </label>
</div>
  </div>
  </div>



  <div class="col">
    <b>GENDER</b>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Male" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="Prefer not to say" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Prefer not to say
  </label>
</div>
  </div>



  <div class="col">
    <b>BUREAU</b>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="bureau"  value="PNP" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    PNP
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="bureau" value="BJMP" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    BJMP
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="bureau" value="BFP" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
   BFP
  </label>
</div>
  </div>

  </div>



  <h3><b>PART 1: FACULTY EVALUATION</b></h3>

  <legend  class="float-none w-auto p-2"><h6> <b> 5 - OUTSTANDING 4 - VERY SATISFACTORY 3 - SATISFACTORY 2 - POOR 1 - NEEDS IMPROVEMENT </b></h6></legend>







  <div class="row">
                              <table class="table table-borderless">
                    <thead>
                      <tr>
                      <th class="disabled header" scope="col">QUESTIONS</th>
                      <th class="disabled header" scope="col">1</th>
                      <th class="disabled header" scope="col">2</th>
                      <th class="disabled header" scope="col">3</th>
                      <th class="disabled header" scope="col">4</th>
                      <th class="disabled header" scope="col">5</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php foreach($questions as  $item) : ?>
                      <tr>
                        <td>
                        <?= $item['question']?>
                        </td>
                      <?php for($c=0;$c<5;$c++): ?>
								<td class="body">
									<div class="icheck-success d-inline">
				                        <input type="radio" value="<?= $c+1?>" name="answers<?= $item['id']?>" id="qradio<?= $item['id']?>" value="<?php echo $c ?>">
				                        <label for="qradio<?= $item['id']?>">
				                        </label>
			                      </div>
                            
								</td>
								<?php endfor; ?>
                
          
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
              
            </div>
            

            <div class="row">
            <div class="form-group">
              <textarea class="form-control suggestions" name="textarea" placeholder="Comments/Suggestions/Recommendations" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            </div>


            <button type="submit" class="btn btn-primary registration-button">Add Faculty Member</button>
                  </form>


  </div>










  <!--formsres-->




















  </div>




  


</div>
   

    </div>
</body>
</html>