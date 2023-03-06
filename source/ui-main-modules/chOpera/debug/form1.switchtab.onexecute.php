<?php $chrom = c("Form1->pages1")->activePage->chrom;
c("Form1->combobox1")->inText = chromium_exec($chrom->self, CHROMIUM_EXEC_ADDRESS, 0);
c("Form1")->caption = c("pages1")->activePage->caption.' - chOpera';
app::title(c("pages1")->activePage->caption.' - chOpera');
c("LABEL")->caption = c("pages1")->activePage->caption.' - chOpera';

c("Form1->progress1")->position = $chrom->loadposition;
c("Form1->statusBar1")->simpleText = $chrom->loadstatus;

c("Form1->progress1")->visible = ($chrom->loadposition<100 && $chrom->loadposition>0);

c("Form1->backward")->visible = $chrom->canGoBack();
c("Form1->forward")->visible = $chrom->canGoForward();
