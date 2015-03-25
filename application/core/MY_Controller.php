<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 扩展 Controller 类
 * @author      lensic [mhy]
 * @link        http://www.lensic.cn/
 * @copyright   Copyright (c) 2013 - , lensic [mhy].
 */
 
/**
 * 默认控制器类
 * 
 * 设置默认编码为 utf-8
 * 设置默认时区为东八区
 * SITE_RESOURCES              公共外部资源存放文件夹
 * SITE_COMMON_STATIC          （公共、前端、后端）样式、图片、脚本存放文件夹
 * SITE_UPLOADS                公共上传文件夹
 * SITE_THEMES                 前端存放主题文件夹
 * SITE_ENCRYPTION_KEY_BEGIN   开始密钥
 * SITE_ENCRYPTION_KEY_END     结束密钥
 * SITE_UPLOAD_IMAGE_SIZE      上传图片大小
 * SITE_UPLOAD_FLASH_SIZE      上传动画大小
 * SITE_UPLOAD_MEDIA_SIZE      上传视频大小
 * SITE_UPLOAD_FILE_SIZE       上传文件大小
 * SITE_NAME                   站点名称
 * SITE_LOGO                   站点 LOGO
 * SITE_ICP                    站点备案号
 * SITE_STATISTICAL_CODE       站点统计代码
 * SITE_SHARE_CODE             站点分享代码
 * SITE_KEYWORDS               站点关键字
 * SITE_DESCRIPTION            站点描述
 * SITE_STATUS                 站点状态
 * SITE_CLOSE_REASON           站点关闭原因
 * SITE_REG_AGREEMENT          站点注册协议
 * SITE_THEME                  站点主题
 * SITE_STATIC                 前端样式、图片、脚本存放位置
 */
class MY_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		header('Content-type:text/html; charset=utf-8');
		date_default_timezone_set('Asia/Shanghai');
		
		$config_common = $this->m_common->get_one('config_common');
		$config_site = $this->m_common->get_one('config_site');
		
		define('ADMIN_DIR','admin');  //登录后台路径
		
		define('SITE_RESOURCES',            base_url() . $config_common['site_resources']);
		define('SITE_COMMON_STATIC',        base_url() . $config_common['site_static']);
		define('SITE_UPLOADS',              base_url() . $config_common['site_uploads']);
		define('SITE_THEMES',               $config_common['site_themes']);
		define('SITE_ENCRYPTION_KEY_BEGIN', $config_common['site_encryption_key_begin']);
		define('SITE_ENCRYPTION_KEY_END',   $config_common['site_encryption_key_end']);
		define('SITE_UPLOAD_IMAGE_SIZE',    $config_common['site_upload_image_size']);
		define('SITE_UPLOAD_FLASH_SIZE',    $config_common['site_upload_flash_size']);
		define('SITE_UPLOAD_MEDIA_SIZE',    $config_common['site_upload_media_size']);
		define('SITE_UPLOAD_FILE_SIZE',     $config_common['site_upload_file_size']);
		
		
		define('SITE_LOGO',                 SITE_COMMON_STATIC . '/site/' . $config_site['site_theme'] . '/' . $config_site['site_logo']);
		define('SITE_ICP',                  $config_site['site_icp']);
		define('SITE_STATISTICAL_CODE',     $config_site['site_statistical_code']);
		define('SITE_SHARE_CODE',           $config_site['site_share_code']);
		define('SITE_KEYWORDS',             $config_site['site_keywords']);
		define('SITE_DESCRIPTION',          $config_site['site_description']);
		define('SITE_STATUS',               $config_site['site_status']);
		define('SITE_CLOSE_REASON',         $config_site['site_close_reason']);
		define('SITE_REG_AGREEMENT',        $config_site['site_reg_agreement']);
        //define('SITE_THEME',                SITE_THEMES . '/' . $config_site['site_theme']);
        define('SITE_THEME',                SITE_THEMES . '/' . $config_site['site_theme']);
		
		$yuanxiao=explode('.',$_SERVER['SERVER_NAME']);
		$yx=$yuanxiao[0];
		switch ($yx) {
			case 'dyzz':
				define('SITE_YX', '_dyzz');
				define('SITE_NAME', '丹阳中专');
			break;
			
			case 'hk':
				define('SITE_YX', '_hk');
				define('SITE_NAME', '海口中专');
			break;
			
			default:
				define('SITE_YX', '');
				define('SITE_NAME',                 $config_site['site_name']);
			break;
		}
        
		
		unset($config_common, $config_site);
		
		define('SITE_STATIC', SITE_COMMON_STATIC . '/site/' . str_replace(SITE_THEMES . '/', '', SITE_THEME));
	}
}

/**
 * 前端控制器类
 */
class Md5_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$config_site_admin = $this->m_common->get_one('config_site_admin');
		define('SITE_ADMIN_NAME', $config_site_admin['site_admin_name']);
		define('SITE_ADMIN_LOGO', SITE_COMMON_STATIC . '/admin/' . $config_site_admin['site_admin_theme'] . '/' . $config_site_admin['site_admin_logo']);
		define('SITE_ADMIN_THEME', $config_site_admin['site_admin_theme']);
		
		unset($config_site_admin);
		
		define('SITE_ADMIN_STATIC', SITE_COMMON_STATIC . '/admin/' . SITE_ADMIN_THEME);
		$this->load->set_admin_template(SITE_ADMIN_THEME);
	}
}

/**
 * 前端控制器类
 */
class M_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->set_template(SITE_THEME);
	}
}

/**
 * 后端控制器类
 * 
 * SITE_ADMIN_NAME     站点后台名称
 * SITE_ADMIN_LOGO     站点后台 LOGO
 * SITE_ADMIN_THEME    站点后台主题
 * SITE_ADMIN_STATIC   后端样式、图片、脚本存放位置
 */
class A_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		
		// 后台登录验证处理
		$this->load->model('admin/m_index');
		$session = $this->m_index->get_session();
		if($this->uri->uri_string === 'index/login')
		{
			if($session['admin_uid'] && $session['admin_username'])
			{
				redirect('index/index');
			}
		} else {
			if(!$session['admin_uid'] || !$session['admin_username'])
			{
				redirect('index/login');
			}
		}
		
		$config_site_admin = $this->m_common->get_one('config_site_admin');
		define('SITE_ADMIN_NAME', $config_site_admin['site_admin_name']);
		define('SITE_ADMIN_LOGO', SITE_COMMON_STATIC . '/admin/' . $config_site_admin['site_admin_theme'] . '/' . $config_site_admin['site_admin_logo']);
		define('SITE_ADMIN_THEME', $config_site_admin['site_admin_theme']);
		
		unset($config_site_admin);
		
		define('SITE_ADMIN_STATIC', SITE_COMMON_STATIC . '/admin/' . SITE_ADMIN_THEME);
		$this->load->set_admin_template(SITE_ADMIN_THEME);
	}
	
	/**
	 * 检查是否具有访问权限
	 * 
	 * @access   public
	 * @param    string    权限名称
	 * @param    boolean   是否返回值
	 * @return   
	 */
	function check_power($page_name, $return = FALSE)
	{
		$check_power = $this->m_index->check_power($page_name);
		if(!$check_power)
		{
			if($return)
			{
				return FALSE;
			}
			die("您不具备访问 {$page_name} 权限或该权限已停用");
		}
		return $page_name;
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */