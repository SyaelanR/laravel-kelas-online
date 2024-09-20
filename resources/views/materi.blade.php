<style type="text/css">
    {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: sans-serif;
    background: #34495e;
}

.content-page{
    width: 80%;
    margin: 50px auto;
    color: white;
}

.content-page h2{
    text-align: center;
    font-size: 40px;
    border-bottom: 6px solid #4caf50;
    margin-bottom: 50px;
    padding: 13px 0;
}

.content{
    margin-bottom: 30px;
    padding: 10px 20px;
    border: 2px solid #4caf50;
    border-radius: 5px;
    background-color: #E5E4E2;
}

.content p{
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
    color: black;    
}

.content h3{
    color: black;
}


.file a{
    padding: 10px 10px;
    background-color: #157DEC;
    border-radius: 5px;
    color: white;
    margin-bottom: 30px;
    text-decoration-line: none;
    margin-right: 10px;
}
.file p{
    margin-top: 30px;
}


.chat-box{
    width: 1000px;
    height: 680px;
    margin: 50px auto;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.chat-header{
    background-color: #4caf50;
    color: #fff;
    padding: 20px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.chat-header h2{
    font-size: 24px;
}

.chat-body{
    height: 450px;
    overflow-y: scroll;
    padding: 20px;
}

.chat-body img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    position: relative;
    top: 10px;
}

.message{
    margin-bottom: 20px;
}

.received{
    display: flex;
    flex-direction: row;
    align-items: flex-start;
}

.received p{
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 5px;
    margin-left: 10px;
}

.sent{
    display: flex;
    flex-direction: row-reverse;
    align-items: flex-start;
}

.sent p{
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    margin-right: 10px;
}

.chat-footer{
    padding: 20px;
    border-top: 1px solid #ddd;
}

.chat-footer form{
    display: flex;
    flex-direction: row;
    align-items: center;
}

.chat-footer input[type="text"]{
    flex: 1;
    padding: 10px;
    font-size: 18px;
    border: none;
    border-radius: 5px;
    background-color: #E5E4E2;
    color: #333;
}

.chat-footer button[type="submit"]{
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    margin-left: 10px;
}

.name p{
    background-color: #00FF9E;
    font-weight: bold;
}
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Materi {{ $idM }}</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style14.css"> -->
</head>
<body>
    <div class="content-page">
        <h2>Materi {{ $idM }}</h2>
        <?php foreach ($materi as $mater): ?>
        <div class="content">
           <h3>NOTE:</h3>
            <p>{{ $mater->note }}</p>
        </div>
        <div class="file"><a href="{{ $mater->file_materi }}">Download Materi</a>      
        </div>
        </div>
        <?php endforeach ?>




             <div class="chat-box">
        <div class="chat-header">
            <h2>Chat</h2>
        </div>
        <div class="chat-body">
            <?php foreach ($chat as $key): ?>
            <div class="message received">
                <div class="name"><p>{{ $key->nama }} :</p></div> <p>{{ $key->teks }}</p>
            </div>
            <?php endforeach ?>
        </div>
        <div class="chat-footer">
            <form action="{{( url('querichat') )}}" method="post">
                @csrf
                <input type="text" name="text" autocomplete="off" placeholder="Type your message here...">
                <input type="hidden" name="nama" value="{{ $namaS }}">
                <input type="hidden" name="idM" value="{{ $mater->id_materi }}">
                <input type="hidden" name="idk" value="{{ $mater->kelas }}">
                <input type="hidden" name="judul" value="{{ $idM }}">
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
  </body>
</html>