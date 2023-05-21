@extends('layouts.nav')
@section('main')


<div class="about-section">
    <div class="inner-container">
      <h1>A propos de nous!</h1>
      <p class="text">
        <h4>REM4U</h4>est une société à responsabilité limitée (SARL) née en 2022, situé en immeuble city centre – bloc b- 1er étage – B1.2, Centre urbain Nord - Tunis, Tunisie. REM4U est spécialisée dans les technologies de l’information, et particulièrement dans le déploiement des technologies d’organisation et dans la collecte, le traitement et le partage des données, visant les secteurs de la mobilité aéroportuaire et du voyage.

      </p>

    </div>
  </div>
  <style>
    *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #424242;
}

.about-section{
    background: url(assets/images/icon/rem4u.png) no-repeat left;
    background-size: 45%;
    background-color: #424242;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: #fdfdfd;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
  </style>


@endsection
