<style amp-custom>
body{
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.cookie1{
  background-color: #fd345a;
  box-shadow: 0 14px 28px rgba(235,94,135,0.30), 0 10px 8px rgba(235,94,135,0.22);
  border-radius: 10px;
  font-size: 14px;
  color: #fff;
  padding: 9px 25px 10px 25px;
  align-self: center;
}
.source-no{
  margin-left: 2px;
  color: #3260B1;
  font-weight: bold;
}
.source-no:hover{
  border-bottom-color: rgba(24,107,255,0);
  background: rgba(24,107,255,0.2);
  cursor: pointer;
}
@media (max-width: 767px) {
  .flex {
    flex-direction: column;
    text-align: center;
    padding: 0px 10px 10px 10px;
  }
}
.cell-1{
    align-self: center;
}
.cell-2{
      align-self: center;
      margin-left: 15px;
      margin-right: 15px;
}
.flex{
  display: flex;
  max-width: 944px;
min-width: 200px;
left: 0;
right: 0;
margin: auto;
}
.navigation{
  background-color: #333;
  color: #fff;
  width: 100%;

}
.button {
            display: inline-block;
            border: none;
            outline: 0;
            text-decoration: none;
            text-align: center;
            vertical-align: top;
            cursor: pointer;
            overflow: hidden;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            letter-spacing: normal ;
            position: relative;
            white-space: nowrap;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-appearance: none;
            transition: .3s;
            -webkit-user-select: none ;
            -moz-user-select: none ;
            -ms-user-select: none ;
            user-select: none
        }
.h-topic{
  position: absolute;
  bottom: -20px;
  right: 30px;
  margin: 0px 0px 0px 35px;
  width: 50px;
  height: 50px;
  background-color: #fd345a;
  border-radius: 50%;
  box-shadow: 0 14px 28px rgba(235,94,135,0.30), 0 10px 8px rgba(235,94,135,0.22);
}
.layer-black::after {
  display: block;
  position: relative;
  background-image: linear-gradient(to bottom, transparent 0%, black 100%);
  margin-top: -150px;
  height: 150px;
  width: 100%;
  content: '';
}
.h-topic:hover {
    box-shadow: 0 6px 7px 0 rgba(235, 94, 135, .25), 0 0 5px 0 rgba(235, 94, 135, .2);
    opacity: 1;
    color: #ffffff;
    -webkit-transform: translateY(-2px);
    transform: translateY(-2px);
    transition: .35s
}

.h-topic:active {
    box-shadow: 0 3px 6px 0 rgba(235, 94, 135, .1), 0 0 10px 0 rgba(235, 94, 135, .1), 0 1px 4px -1px rgba(235, 94, 135, .1);
    -webkit-transform: translateY(0);
    transform: translateY(0);
    color: #ffffff;
    transition: .35s
}
.share-button {
    color: #ffffff;
    vertical-align: text-bottom;
}
.container {
  position: relative;
}
.container-content {
  position: relative;
  padding: 10px 35px 10px 35px;
}
.text-container{
  position: absolute;
  bottom: 7%;
  max-width:700px;
  right: 0;
    left: 0;
    margin: auto;
  padding: 0px 25px 0px 25px;
  text-align: center;
}
.header-text{
  color: #fff;
  font-size: 28px;
}
.p-section{
  color: #fff;
  font-size: 14px;
  margin-bottom: -5px;
text-transform: uppercase;
letter-spacing: .05em;
font-weight: 600;
}
.author-avatar{
  width: 47px;
  height: 47px;
  border-radius: 50%;
  float: left;
}
.t-blog{
  font-size: 18px;
  line-height: 1.5;
}
.blog-picture-desc{
  font-size: 15px;
  line-height: 1.5
}
.author-avatar:hover{
  border-radius: 0%;
  transition: .35s
}
.author{
  position: relative;
  margin: 15px 0 -20px 0;
}
.author-text{
  margin-left: 60px;
}
.lightbox{
  background: #fff;
  position: relative;
  height:100%;
  padding: 10px 25px 10px 25px;
}
.backbox{
  bottom: 50px;
  left: 25px;
  padding:10px;
  position: absolute;
  background: #fff;
  border-radius: 20%;
  box-shadow: 0 14px 28px rgba(0,0,0,0.30), 0 10px 8px rgba(0,0,0,0.22);
}
.quote-gr-blue{
  background: linear-gradient(to right, #21D4FD 0%, #B721FF 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}
.a-title{
  text-decoration: none;
  color: #fff;
}
.fw500{
  font-weight: 400;
}
.mback{
  vertical-align: text-bottom;
  color: #222;
}
  /* Center the notification content */
  amp-user-notification.sample-notification {
    background: white;
    box-shadow: 0 -5px 5px -5px rgba(0, 0, 0, 0.15);
  }
   amp-social-share.rounded {
     border-radius: 20%;
     background-size: 68%;
     margin-right: 5px;
     margin-top: 5px;
   }
.text-social-lb{
  margin-top: -10px;
  margin-bottom: 10px;
}
.mwidth1{
  max-width: 300px;
}
.m20{
  margin-top: 30px
}
.m10{
  margin-top: 25px
}
.m12{
  margin-top: -5px
}
.text-sp-lb{
  font-size: 15px;
  font-weight: 400;
  color: #a5acb4;
}
.p-author{
  font-size: 16px;
  padding-top: 3px;
  font-weight: 600;
}

.p-date{
  margin-top: -13px;
  font-size: 14px;
  font-weight: 400;
  color: #a5acb4;
}
.link{
  color: #3260B1;
  border-bottom: 2px solid rgba(99,200,246,0.15);
  text-decoration: none;
  -webkit-transition: 0.35s;
transition: 0.35s;
}
.link:hover{
  color: #3260B1;
  border-bottom-color: rgba(24,107,255,0);
  background: rgba(24,107,255,0.2);
}

.p-date2{
  margin-top: 40px;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.4;
  color: #a5acb4;
  padding-left: 8px;
  padding-bottom: 2px;
  border-left: 2px solid #a5acb4;
}
.blog-picture{
  border-radius: 10px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
}
.desktop{
  display: none
}
.contain-content-button{
  height: 38px;
  min-width: 150px;
  background-color: #ebebf0;
  color: #929196;
  line-height: 1.3;
  padding: 5px 7px 5px 7px;
  margin-right: 15px;
  border-radius: 8px;
display: flex;
align-items: center;
text-decoration: none;
}
.content-button{
  font-size: 12px;
  text-align: left;
  padding-right: 3px;
}
.icon-content{
  padding-right: 7px;
  line-height: 68px;
  height: 50px;
  color: #000;
}

.content-navigation{
  order: 2;
  padding-bottom: 4%;
overflow-y: hidden;
overflow-x: scroll;
-webkit-overflow-scrolling: touch;
display: flex;
flex-wrap: nowrap;
width: auto;
}
.tabelofcontent{
  border-top: 1px solid #ebebf0;
  padding-top: 10px;
  margin-bottom: 10px;
}
@media (min-width: 576px){
  .cookie1{
    flex: 20%;
  }
  .cell-1{
    flex: 80%;
  }
  .mobile{
    display: none
  }
  .desktop{
    display: block
  }
  .icon-con{
    padding-right: 5px;
    margin-bottom: 20px;
  }
  .header-text{
    font-size: 32px;
  }
.desktop-container{
  background: #ffffff;
  padding: 0 30px 0 30px;
}
.container-content{
  padding: 10px 45px 10px 45px
}
.author{
  margin: -5px 0 -25px 0;
}
.h-topic{
  height: 44px;
  min-width: 125px;
  padding: 5px 7px 5px 7px;
  margin-right: 15px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  right: 10%;
  z-index: 100;
}
.p-date2{
  margin-top: 50px;
  font-size: 16px;
  padding-left: 10px;
  padding-bottom: 1px;
}
.lightbox{
  padding: 60px 85px 60px 85px;
}
.mwidth1{
  max-width: 380px;
}
}

@media (min-width: 768px){
  .header-text{
    font-size: 35px;
  }.backbox{
    bottom: 92%;
  }
  .lightcont{
    max-width:700px;
    right: 0;
      left: 0;
      margin: auto;
  }
  .desktop-container{
    background: #ffffff;
    padding: 0 70px 0 70px;
  }
  .container-content{
    padding: 20px 65px 20px 65px
  }
  .author{
    position: relative;
    margin: 15px 0 -40px 0;
  }
  .p-date2{
    margin-top: 70px;
  }
  .h-topic{
    right: 15%;
  }
}

@media (min-width: 1024px){
  .header-text{
    font-size: 43px;
  }
  .desktop-container{
    background: #ffffff;
    max-width: 850px;
    right: 0;
      left: 0;
      margin: auto;
  }
  .container-content{
    padding: 30px 85px 30px 85px
  }
  .author{
    position: relative;
    margin: 15px 0 -50px 0;
  }
  .p-date2{
    margin-top: 80px;
  }
  .h-topic{
    right: 20%;
  }
}

@media (min-width: 1200px){
  .header-text{
    font-size: 50px;
  }
  .author{
    position: relative;
    margin: 15px 0 -7% 0;
  }
  .p-date2{
    margin-top: 10%;
  }
  .h-topic{
    right: 29%;
  }
}
.overflow-container{
  position: relative;
  overflow: hidden;
  background: #000;
}
.span-h{
  color: #fff;
  font-size: 12px;
  text-align: left;
  padding-left: 5px;
  margin-bottom: 22px;
}
.table-responsive{
      overflow-x: auto;
}
table{
  border-collapse: collapse;
}
.table-responsive th {
    display: table-cell;
    padding: 1em;
    vertical-align: middle;
    background-color: transparent;
font-weight: 700;
border-bottom: 2px solid #EBEBF0;
color: #000;
text-align: left;
}
.table-responsive td {
    display: table-cell;
    padding: 1em;
    vertical-align: middle;
    background-color: transparent;
color: #000;
border-bottom: 1px solid #EBEBF0;
text-align: left;
}
</style>
