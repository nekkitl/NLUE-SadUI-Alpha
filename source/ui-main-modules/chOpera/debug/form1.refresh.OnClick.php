<?php if(c("progress1")->visible===true){//Бар виден == идёт загрузка
    c("Form1->pages1")->activePage->chrom->stopLoad();
    c("statusBar1")->simpleText = 'Остановлено';
    c("progress1")->visible = false;
}
else reloadPage();
