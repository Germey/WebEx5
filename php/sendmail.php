<?php

	require_once "email.class.php";
	//******************** ������Ϣ ********************************
	$smtpserver = "smtp.163.com";//SMTP������
	$smtpserverport =25;//SMTP�������˿�
	$smtpusermail = "19940629cqc@163.com";//SMTP���������û�����
	$smtpemailto = "cqc@cuiqingcai.com";//���͸�˭
	$smtpuser = "19940629cqc";//SMTP���������û��ʺ�
	$smtppass = "940629CQC";//SMTP���������û�����
	$mailtitle = $_POST['topic'];//�ʼ�����
	$mailcontent = $_POST['name'].$_POST['email']."<h1>".$_POST['content']."</h1>";//�ʼ�����
	$mailtype = "HTML";//�ʼ���ʽ��HTML/TXT��,TXTΪ�ı��ʼ�
	//************************ ������Ϣ ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//�������һ��true�Ǳ�ʾʹ�������֤,����ʹ�������֤.
	$smtp->debug = false;//�Ƿ���ʾ���͵ĵ�����Ϣ
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	//����ֵ����Ϊ0,����ʧ��
	if($state==""){
		echo 0;
	//������Ч��Ϣ�����ͳɹ�
	}else if(strlen($state)!=0){
		echo 1;
	//δ֪����
	}else{
		echo 2;
	}
	
	

?>