<?php if(c("progress1")->visible===true){//��� ����� == ��� ��������
    c("Form1->pages1")->activePage->chrom->stopLoad();
    c("statusBar1")->simpleText = '�����������';
    c("progress1")->visible = false;
}
else reloadPage();
