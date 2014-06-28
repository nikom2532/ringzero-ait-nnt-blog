<?php
class PRD_HomePRD_model extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		//$this->load->database();
		$this->db2 = $this->load->database('PYRO_DEVELOPMENT_2', TRUE);
	}
	
	//##################### For Test P'Ooh Database #########################
	
	public function get_NT01_News()
	{
		//var_dump($this->PYRO_DEVELOPMENT_2);
		$query = $this->db2->
			Limit(5, 0)->
			select('
				n.[NT01_NewsID],
				n.[NT01_NewsTitle],				
				n.[NT01_UpdDate],
				n.[NT01_CreDate],
				n.[NT01_ViewCount],
				p.[NT11_PicPath],
				p.[NT11_FileStatus],				
			')->
			
			join('[NNT_DataCenter].[dbo].[NT11_Picture] as p', 'n.[NT01_NewsID] = p.[NT01_NewsID]', 'left')->
			where('p.[NT11_PicPath] !=', 'NULL')->
			order_by('n.[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[NT01_News] as n');	


			return $query->result();
	}
	
	public function get_RawNews($uid)
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT01_NewsTitle],
				[NT01_NewsDesc], 
				[NT01_NewsDate], 
			')->
			where('[SC03_UserId]', $uid)->
			order_by('[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_RawNews]');
			return $query->result();
	}

	public function get_PublishNews($uid)
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT01_NewsTitle],
				[NT01_NewsDesc], 
				[NT01_NewsDate], 
			')->
			where('[SC03_UserId]', $uid)->
			order_by('[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_PublishNews]');
			return $query->result();
	}

	public function get_NewsType()
	{
		$query = $this->db->
			Limit(200, 0)->
			select('
				[NT02_TypeID],
				[TypeNews],
				[NT03_SubTypeID],
				[SubType], 
				[NT02_Status], 
			')->
			where('[NT02_Status]', 'Y')->
			order_by('[NT02_TypeID]','ASC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_NewsType]');
			return $query->result();
	}

  public function get_Otherfile($uid)
	{
		$ReporterID = array('1111004046','2018400003','1111004047','2009900258','2018100001','2009800741');
		
		$query = $this->db->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT13_FileID],
				[NT13_FileName],
				[NT13_FilePath], 
				[NT13_Status], 
				[NT01_ReporterID],
			')->
			where('[NT13_Status]', 'Y')->
			//where('[NT01_ReporterID] =', $uid)->
			where_in('[NT01_ReporterID]',$ReporterID)->
			order_by('[NT13_FileID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_Otherfile]');
			return $query->result();
	}

	 public function get_Picture($uid)	
	{
		$query = $this->db2->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT11_PicID],
				[NT11_PicName],
				
				[url], 
				[NT11_Extension],
      			[NT11_FileSize],
				[NT11_Status], 
				[NT01_ReporterID],
			')->
			where('[NT11_Status]', 'Y')->
			where('[NT01_ReporterID] =', $uid)->
			order_by('[NT11_PicID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_Picture]');
			return $query->result();
	}

  public function get_VDO($uid)
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT10_VDOID],
				[NT10_VDOName],
				[url], 
				[NT10_Extension],
      			[NT10_FileSize],
				[NT10_Status], 
				[NT01_ReporterID],
			')->
			where('[NT10_Status]', 'Y')->
			where('[NT01_ReporterID] =', $uid)->
			order_by('[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_VDO] as v');
			//var_dump($query);
			//exit;
			return $query->result();
	}
	public function get_VDO_count($uid)
	{
		$query = $this->db->
			//Limit(20, 0)->
			select('
				count([NT01_NewsID])
			')->
			where('[NT10_Status]', 'Y')->
			where('[NT01_ReporterID] =', $uid)->
			order_by('[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_VDO]');
			return $query->result();
	}

  public function get_Voice($uid)
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[NT01_NewsID],
				[NT12_VoiceID],
				[NT12_VoiceName],
				[NT12_VoicePath], 
				[NT12_Extension],
				[NT12_Status], 
				[NT01_ReporterID],
			')->
			where('[NT12_Status]', 'Y')->
			where('[NT01_ReporterID] =', $uid)->
			order_by('[NT01_NewsID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_Voice]');
			return $query->result();
	}

	public function get_User($uid)
	{
		$query = $this->db->
			//Limit(20, 0)->
			select('
				[SC03_UserId],
				[SC03_UserName], 
				[TN_PWD],
				[SC03_TName],
				[SC03_FName], 
				[SC03_LName], 
				[SC07_DepartmentId], 
				[SC03_Career], 
				[SC03_PositionType], 
				[CM06_ProvinceId], 
				[SC03_IDCard], 
				[SC03_Email], 				 
				[SC03_Tel], 
				[SC03_PhoneOffice], 
			')->
			where('[SC03_UserId]', $uid)->
			order_by('[SC03_UserId]','DESC')->
			get('[NNT_DataCenter].[dbo].[SC03_User]');
			return $query->result();
	}
	public function get_AllUser()
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[SC03_UserId],
				[SC03_UserName], 
				[TN_PWD],
				[SC03_TName],
				[SC03_FName], 
				[SC03_LName], 
				[SC07_DepartmentId], 
				[SC03_Career], 
				[SC03_PositionType], 
				[CM06_ProvinceId], 
				[SC03_IDCard], 
				[SC03_Email], 				 
				[SC03_Tel], 
				[SC03_PhoneOffice], 
			')->
			//where('[SC03_UserId]', $uid)->
			order_by('[SC03_UserId]','DESC')->
			get('[NNT_DataCenter].[dbo].[SC03_User]');
			return $query->result();
	}
	public function get_AllUserdata()
	{
		$query = $this->db->
			Limit(20, 0)->
			select('
				[UserID],
				[Title], 
				[FName],
				[LName],
				[Gender], 
				[Email], 
				[Username], 
				[SC03_Password],
				[Tel], 
				[Phone Office] 
				,[Address]
			      ,[Career]
			      ,[PositionType]
			      ,[Position]
			      ,[IDCard]
			      ,[RegisterDate]
			      ,[ContactName]
			      ,[Country]
			      ,[System]
			      ,[Department]
			      ,[Region]
			      ,[Tumbon]
			      ,[Ampur]
			      ,[Province]			      
			      ,[SC03_Status] 
			')->
			//where('[SC03_UserId]', $uid)->
			order_by('[UserID]','DESC')->
			get('[NNT_DataCenter].[dbo].[VW_Blog_User]');
			return $query->result();
	}
}

/*
SELECT TOP 1000 [UserID]
      ,[Title]
      ,[FName]
      ,[LName]
      ,[Gender]
      ,[Email]
      ,[Username]
      ,[SC03_Password]
      ,[Tel]
      ,[Phone Office]
      ,[Address]
      ,[Career]
      ,[PositionType]
      ,[Position]
      ,[IDCard]
      ,[RegisterDate]
      ,[ContactName]
      ,[Country]
      ,[System]
      ,[Department]
      ,[Region]
      ,[Province]
      ,[Ampur]
      ,[Tumbon]
      ,[SC03_Status]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_User]

  UserID	Title	FName	LName	Gender	Email	Username	SC03_Password	Tel	Phone Office	Address	Career	PositionType	Position	IDCard	RegisterDate	ContactName	Country	System	Department	Region	Province	Ampur	Tumbon	SC03_Status
1021205005	NULL	จำนงค์ ศรัณยพิพัฒน์ / สวท.	จำนงค์ ศรัณยพิพัฒน์ / สวท.	NULL	NULL	chamnong	icY1nnuLAgA=	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	กรมประชาสัมพันธ์	Radio-สถานีวิทยุกระจายเสียงแห่งประเทศไทย	ภาคกลางและปริมณฑล	กรุงเทพมหานคร	NULL	NULL	T
1021205006	นาย	สุภา เลียวกายะสุวรรณ / สวท.	สุภา เลียวกายะสุวรรณ / สวท.	M	-	supa	icY1nnuLAgA=	-	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	กรมประชาสัมพันธ์	Radio-สถานีวิทยุกระจายเสียงแห่งประเทศไทย	ภาคกลางและปริมณฑล	กรุงเทพมหานคร	NULL	NULL	T
1021205011	นางสาว	จันทนา	อ้นคำ	F	-	jantana	wqTNSrjMC9OtKoiGqVaKiQ==	-	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	NULL	กรมประชาสัมพันธ์	สำนักประชาสัมพันธ์เขต 8	ภาคตะวันตก	กาญจนบุรี	เทศบาลเมืองกาญจนบุรี	NULL	T
*/

/*
SELECT TOP 1000 [NT01_NewsID]
      ,[NT01_NewsTitle]
      ,[NT01_NewsDesc]
      ,[NT01_FullText]
      ,[NT01_NewsDate]	// 2013-07-02 14:48:27.433
      ,[NT02_TypeID]	// 4
      ,[NT02_TypeName]	// ศิลปะ / วัฒนธรรม / บันเทิง
      ,[NT03_SubTypeID]	// null
      ,[NT03_SubTypeName]	// null
      ,[SC07_DepartmentName]
      ,[NT01_NewsTag]
      ,[NT01_NewsReferance]
      ,[SC03_UserId]
      ,[SC03_TName]
      ,[SC03_FName]
      ,[SC03_LName]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_RawNews]
  */

/*

SELECT TOP 1000 [NT01_NewsID]
      ,[NT01_NewsTitle]
      ,[NT01_NewsDesc]
      ,[NT01_FullText]
      ,[NT01_NewsDate]
      ,[NT02_TypeID]
      ,[NT02_TypeName]
      ,[NT03_SubTypeID]
      ,[NT03_SubTypeName]
      ,[NT01_NewsTag]
      ,[NT01_NewsReferance]
      ,[SC07_DepartmentName]
      ,[SC03_UserId]
      ,[SC03_TName]
      ,[SC03_FName]
      ,[SC03_LName]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_PublishNews]
*/

/*

SELECT TOP 1000 [NT01_NewsID]
      ,[NT10_VDOID]
      ,[NT10_VDOName]
      ,[url]
      ,[NT10_Extension]
      ,[NT10_FileSize]
      ,[NT10_Status]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_VDO]
*/

/*

SELECT TOP 1000 [NT01_NewsID]
      ,[NT12_VoiceID]
      ,[NT12_VoiceName]
      ,[NT12_VoicePath]
      ,[NT12_Status]
      ,[NT12_Extension]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_Voice]
*/

/*

SELECT TOP 1000 [NT01_NewsID]
      ,[NT11_PicID]
      ,[NT11_PicName]
      ,[url]
      ,[NT11_Extension]
      ,[NT11_FileSize]
      ,[NT11_Status]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_Picture]
*/

/*

SELECT TOP 1000 [NT01_NewsID]
      ,[NT13_FileID]
      ,[NT13_FileName]
      ,[NT13_FilePath]
      ,[NT13_Extension]
      ,[NT13_FileSize]
      ,[NT13_Status]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_Otherfile]
*/

/*
SELECT TOP 1000 [NT02_TypeID]
      ,[TypeNews]
      ,[NT03_SubTypeID]
      ,[SubType]
      ,[NT02_Status]
  FROM [NNT_DataCenter].[dbo].[VW_Blog_NewsType]
*/

  /*
SELECT TOP 1000 [SC03_UserId]
      ,[SC03_HeadUserId]
      ,[SC03_TName]
      ,[SC03_FName]
      ,[SC03_LName]
      ,[SC03_EngTName]
      ,[SC03_EngFName]
      ,[SC03_EngLName]
      ,[SC03_Gender]
      ,[SC03_Email]
      ,[SC03_UserName]
      ,[SC03_Password]
      ,[SC03_EmpId]
      ,[SC03_NickName]
      ,[SC03_RefId]
      ,[SC03_PicFile]
      ,[SC03_Token]
      ,[UpdUser]
      ,[UpdDate]
      ,[CM05_RegionId]
      ,[CM06_ProvinceId]
      ,[CM07_AmpurId]
      ,[CM08_TumbonId]
      ,[SC06_BranchId]
      ,[SC07_DepartmentId]
      ,[SC03_Status]
      ,[SC03_MacAddress]
      ,[PRD_USERID]
      ,[PRD_PWD]
      ,[TN_USERID]
      ,[TN_PWD]
      ,[SC03_Tel]
      ,[TN_ROLE]
      ,[SC03_PhoneOffice]
      ,[SC03_Address]
      ,[SC03_Career]
      ,[SC03_PositionType]
      ,[SC03_Position]
      ,[SC03_IDCard]
      ,[SC07_MainDepartmentId]
      ,[SC03_FullText]
      ,[SC03_RegisterDate]
      ,[USR_ID]
      ,[SC03_ContactName]
      ,[SC03_OtherDepartment]
      ,[SC03_ZipCode]
      ,[CM13_CountryID]
      ,[SC03_UpdUser]
      ,[SC03_UpdDate]
      ,[SC03_LastChangePassword]
      ,[SC03_NotifyChangePassword]
      ,[SC17_SystemID]
  FROM [NNT_DataCenter].[dbo].[SC03_User]
  */

  /*
SC03_UserId	SC03_UserName	TN_PWD	SC03_TName	SC03_FName	SC03_LName	SC07_DepartmentId	SC03_Career	SC03_PositionType	CM06_ProvinceId	SC03_IDCard	SC03_Email	SC03_Tel	SC03_PhoneOffice
2099990001	StaffNBT11	NULL	นาย	nbt11	staff	217	Testk	ประเภทบริหารระดับสูง	810000	1111111111111	TestWeb@NNT.com	1111111111111	1111
2099900141	varinton_j	NULL	นางสาว	วรินทร	เจี่ยสมบุญ	69	ลูกจ้างชั่งคราว	ลูกจ้างชั่วคราว	500000	1100701180771	neung_oh_ho_hae@hotmail.com	0856265496	053818061
2099900140	rujiporn_t	NULL	นางสาว	รุจิภรณ์	เตจ๊ะ	69	ลูกจ้างชั่งคราว	ประเภททั่วไประดับชำนาญงาน	500000	3521100005617	rujipron_@hotmail.com	0866721519	053 818061
2099900139	arnakornda	NULL	นาย	อาณกร	ศิริมาตย์	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3550100718451	arnakornda47@gmail.com	0898384077	053283744
2099900138	tanapol_K	NULL	นาย	ธนพล  	ก้อนสมบัติ	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3559900020235	tanapol2507@hotmail.com	0857147213	053283744
2099900137	ASA	NULL	นาย	อาษา	นันตาเครือ	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3520100202373	asatv11@hotmail.com	0816714674	053283744
2099900136	ch0n11	NULL	นาย	ณรงค์	เทโพทอง	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3249900195224	narong_t@prd.go.th	0892646770	053283744
2099900135	burin	NULL	นาย	บุรินทร์	ฉายาพัฒน์	68	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3440100129831	supachai_radio@hotmail.com	0883234466	053283734
2099900134	prlampang01	NULL	นาย	อธิชัย	ต้นกันยา	168	ข้าราชการ	ประเภทวิชาการ ระดับชำนาญการ	520000	1234567890123	atichaiya@hotmail.com	081-9513498	-
2099900133	tummor	NULL	นาย	ปิยณัฐ	พาเรือนคำ	69	ข้าราชการ	ประเภททั่วไประดับทักษะพิเศษ	500000	1509900154731	tummor@hotmail.com	0869133230	053283742
2099900132	phakphoom_p	NULL	นาย	พักตร์ภูมิ	ปัญญาไชยพัฒน์	174	ข้าราชการ	ปฏิบัติงาน	580000	1409900157588	tockmaster@gmail.com	0857210340	053611808
2099900131	anu_k	NULL	นาย	อนุ	คงกระพันธ์	69	ข้าราชการ	ประเภททั่วไประดับอาวุโส	500000	5309990030721	anu.joke@gmail.com	0818847610	053283744
2099900130	rapeepex	NULL	นาย	รพีพงษ์	เป็กทอง	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3540100190448	rapeepex@hotmail.com	0861932789	053283744
2099900129	beerzabi	NULL	นาย	อภิชาติ	เฮงพลอย	69	ลูกจ้างชั่งคราว	เจ้าหน้าที่บันทึกข้อมูล	500000	1529900248493	beerzabi@gmail.com	0850294796	053818061
2099900128	tongto_28	NULL	นาย	ปิยะพงศ์	ฟูฟอง	69	พนักงานราชการ	ประเภทบริหารระดับต้น	500000	3501200448286	yawamakaona@hotmail.com	081-278-3298	053283742
2099900127	niwat_c	NULL	นาย	นิวัต	ชูวงค์	166	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3589900008839	niwat_c@prd.go.th	0894323350	053112740
2099900126	radio2005	NULL	นาย	วิชัย	กันสืบ	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3540100196071	wichai.gu@gmail.com	0897290434	053283744
2099900125	sanit_p	NULL	นาย	สนิท 	ภูเขาลาด	69	ข้าราชการ	ประเภททั่วไประดับชำนาญงาน	500000	3449900340605	sanit_poo@hotmail.com	0861871761	053283742
2099900124	Nirutchawin	NULL	นาย	นิรุทธ์ชวิน	อริยากุลโรจน์	69	ลูกจ้างชั่งคราว	ผู้สื่อข่าว -ช่างภาพ	500000	3550600010881	jaberm@hotmail.com	0856538313	053818061
2099900123	weerasak_s	NULL	นาย	วีระศักดิ์ 	ศุภวงศ์ชัย	64	ข้าราชการ	ประเภทวิชาการ ระดับชำนาญการ	480000	3449900114192	weerasak_s@prd.go.th	08-1725-2845	042-511-569
  */