﻿<?php
/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      Pepijn Over <pep@neanderthal-technology.com>
 * @copyright   Copyright (c) 2008-2014 Pepijn Over <pep@neanderthal-technology.com>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: v3.1.1
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
	'name' => 'ภาษาไทย-Thai',
	'locale' => array('th_TH.UTF-8', 'th_TH', 'Thai', 'Thai-thai'),
	'system' => array(
		'title' => 'ระบบตรวจสอบสถานะเครื่องแม่ข่าย',
		'install' => 'ติดตั้ง',
		'action' => 'การจัดการ',
		'save' => 'บันทึก',
		'edit' => 'แก้ไข',
		'delete' => 'ลบ',
		'date' => 'วันที่',
		'message' => 'ข้อความ',
		'yes' => 'ใช่',
		'no' => 'ไม่',
		'insert' => 'แทรก',
		'add_new' => 'เพิ่มใหม่',
		'update_available' => 'มีเวอร์ชั่นใหม่ ({version}) สามารถรับได้จาก <a href="http://www.phpservermonitor.org" target="_blank">http://www.phpservermonitor.org</a>.',
		'back_to_top' => 'กลับด้านบน',
		'go_back' => 'ย้อนกลับ',
		'ok' => 'ตกลง',
		'cancel' => 'ยกเลิก',
		// date/time format according the strftime php function format parameter http://php.net/manual/function.strftime.php
		'short_day_format' => '%B %e',
		'long_day_format' => '%B %e, %Y',
		'yesterday_format' => 'เมื่อวาน ณ %k:%M',
		'other_day_format' => '%A ณ %k:%M',
		'never' => 'ยังไม่เคยมีข้อมูล',
		'hours_ago' => '%d ชั่วโมงที่แล้ว',
		'an_hour_ago' => 'ประมาณหนึ่งชั่วโมงที่แล้ว',
		'minutes_ago' => '%d นาทีที่แล้ว',
		'a_minute_ago' => 'ประมาณนาทีที่แล้ว',
		'seconds_ago' => '%d วินาทีที่แล้ว',
		'a_second_ago' => 'วินาทีที่แล้ว',
	),
	'menu' => array(
		'config' => 'การตั้งค่า',
		'server' => 'เครื่องแม่ข่าย',
		'server_log' => 'รายงาน',
		'server_status' => 'สถานะ',
		'server_update' => 'อัพเดท',
		'user' => 'ผู้ใช้',
		'help' => 'ช่วยเหลือ',
	),
	'users' => array(
		'user' => 'ผู้ใช้',
		'name' => 'ชื่อ',
		'user_name' => 'นามสกุล',
		'password' => 'รหัสผ่าน',
		'password_repeat' => 'พิมพ์รหัสผ่านอีกครั้ง',
		'password_leave_blank' => 'เว้นว่างไว้หากไม่ต้องการเปลี่ยนแปลง',
		'level' => 'ระดับ',
		'level_10' => 'ผู้ดูแลระบบ',
		'level_20' => 'ผู้ใช้งาน',
		'level_description' => '<b>ผู้ดูแลระบบ</b> มีสิทธิ์ในการเข้าถึงสูงสุด: โดยสามารถจัดการเครื่องแม่ข่าย ผู้ใช้และแก้ไขค่าคอนฟิกรวมของระบบได้<br/><b>ผู้ใช้</b> สามารถดูและอัพเดทได้เฉพาะเครื่องแม่ข่ายที่ได้รับมอบหมายเท่านั้น',
		'mobile' => 'หมายเลขโทรศัพท์เคลื่อนที่',
		'email' => 'อีเมล์',
		'pushover' => 'Pushover',
		'pushover_description' => 'Pushover คือบริการที่ให้บริการเกี่ยวการเตือนที่สะดวก หากต้องการข้อมูลสามารดูข้อมูลได้จาก <a href="https://pushover.net/">ผู้ให้บริการ</a>',
		'pushover_key' => 'Pushover Key',
		'pushover_device' => 'อุปกรณ์ Pushover',
		'pushover_device_description' => 'ชื่ออุปกรณ์ที่ต้องการให้ส่งข้อความไปถึง เว้นว่างหากต้องการส่งไปยังทุก ๆ อุปกรณ์ ',
		'delete_title' => 'ลบผู้ใช้',
		'delete_message' => 'คุณแน่ใจหรือไม่ที่ต้องการจะลบผู้ใช้นี้ \'%1\'?',
		'deleted' => 'ลบผู้ใช้แล้ว',
		'updated' => 'อัพเดทข้อมูลผู้ใช้แล้ว',
		'inserted' => 'เพิ่มข้อมูลผู้ใช้แล้ว',
		'profile' => 'โปรไฟล์',
		'profile_updated' => 'ได้อัพเดทโปรไฟล์เกี่ยวกับคุณแล้ว',
		'error_user_name_bad_length' => 'ชื่อผู้ใช้ต้องมีจำนวนระหว่าง 2 ถึง 64 ตัวอักษร',
		'error_user_name_invalid' => 'ชื่อผู้ใช้จะต้องประกอบอักขระตัวอักษร (a-z, A-Z) หรือ ตัวเลข (0-9) และ underscores (_) เท่านั้น',
		'error_user_name_exists' => 'ชื่อผู้ใช้นี้มีอยู่แล้วในฐานข้อมูล',
		'error_user_email_bad_length' => 'ที่อยู่อีเมล์มีจำนวนระหว่าง 5 ถึง 255 ตัวอักษร',
		'error_user_email_invalid' => 'ที่อยู่อีเมล์นี้ไม่ถูกต้อง',
		'error_user_level_invalid' => 'ระดับของผู้ใช้ที่กำหนดไม่ถูกต้อง',
		'error_user_no_match' => 'ไม่พบผู้ใช้ในฐานข้อมูล',
		'error_user_password_invalid' => 'รหัสผ่านที่ป้อนไม่ถูกต้อง',
		'error_user_password_no_match' => 'รหัสผ่านที่ป้อนไม่ตรงกัน',
	),
	'log' => array(
		'title' => 'รายงานทั้งหมด',
		'type' => 'ชนิด',
		'status' => 'สถานะ',
		'email' => 'อีเมล์',
		'sms' => 'SMS',
		'pushover' => 'Pushover',
		'no_logs' => 'ยังไม่มีรายงาน',
	),
	'servers' => array(
		'server' => 'เครื่องแม่ข่าย',
		'status' => 'สถานะ',
		'label' => 'ชื่อ',
		'domain' => 'โดเมน/ไอพี',
		'timeout' => 'หมดเวลา',
		'timeout_description' => 'จำนวนวินาทีในการรอสำหรับการตอบกลับของเครื่องแม่ข่าย',
		'port' => 'พอร์ต',
		'type' => 'ชนิด',
		'type_website' => 'เว็บไซต์',
		'type_service' => 'บริการ',
		'pattern' => 'สตริงสำหรับค้นหา/รูปแบบ',
		'pattern_description' => 'หากรูปแบบการค้นหาไม่ไม่พบบนเว็บไซต์ เครื่องแม่ข่ายจะถูกทำเครื่องหมายเป็นออฟไลน์ อนุญาตให้ใช้ Regular expressions ได้',
		'last_check' => 'การตรวจล่าสุด',
		'last_online' => 'การออนไลน์ล่าสุด',
		'monitoring' => 'การตรวจสอบ',
		'no_monitoring' => 'ไม่ตรวจสอบ',
		'email' => 'อีเมล์',
		'send_email' => 'ส่งอีเมล์',
		'sms' => 'SMS',
		'send_sms' => 'ส่ง SMS',
		'pushover' => 'Pushover',
		'users' => 'ผู้ใช้',
		'delete_title' => 'ลบเครื่องแม่ข่าย',
		'delete_message' => 'คุณแน่ใจหรือไม่ที่จะลบเครื่องแม่ข่าย \'%1\'?',
		'deleted' => 'ลบเครื่องแม่ข่ายแล้ว',
		'updated' => 'อัพเดทข้อมูลเครื่องแม่ข่ายแล้ว',
		'inserted' => 'เพิ่มเครื่องแม่ข่าย',
		'latency' => 'ความล่าช้า',
		'latency_max' => 'ความล่าช้า (สูงสุด)',
		'latency_min' => 'ความล่าช้า (ต่ำสุด)',
		'latency_avg' => 'ความล่าช้า (เฉลี่ย)',
		'uptime' => 'ระยะเวลาในการทำงาน',
		'year' => 'ปี',
		'month' => 'เดือน',
		'week' => 'สัปดาห์',
		'day' => 'วัน',
		'hour' => 'ชั่วโมง',
		'warning_threshold' => 'เกณฑ์ในการเตือน',
		'warning_threshold_description' => 'จำนวนที่ต้องทำการตรวจสอบ ก่อนที่จะทำเครื่องหมายว่าออฟไลน์',
		'chart_last_week' => 'สัปดาห์ที่แล้ว',
		'chart_history' => 'ประวัติ',
		// Charts date format according jqPlot date format  http://www.jqplot.com/docs/files/plugins/jqplot-dateAxisRenderer-js.html
		'chart_day_format' => '%Y-%m-%d',
		'chart_long_date_format' => '%Y-%m-%d %H:%M:%S',
		'chart_short_date_format' => '%m/%d %H:%M',
		'chart_short_time_format' => '%H:%M',
		'warning_notifications_disabled_sms' => 'การเตือนผ่าน SMS ถูกปิด',
		'warning_notifications_disabled_email' => 'การเตือนผ่านอีเมล์ถูกปิด',
		'warning_notifications_disabled_pushover' => 'การเตือนผ่าน Pushover ถูกปิด',
		'error_server_no_match' => 'ไม่พบเครื่องแม่ข่าย',
		'error_server_label_bad_length' => 'ชื่อต้องมีจำนวนระหว่าง 1 ถึง 255 ตัวอักษร.',
		'error_server_ip_bad_length' => 'โดเมนฝไอพี ต้องมีจำนวนระหว่าง 1 ถึง 255 ตัวอักษร.',
		'error_server_ip_bad_service' => 'หมายเลขไอพีไม่ถูกต้อง',
		'error_server_ip_bad_website' => 'URL ของเว็บไซต์ไม่ถูกต้อง',
		'error_server_type_invalid' => 'ชนิดของเครื่องแม่ข่ายที่เลือกไม่ถูกต้อง',
		'error_server_warning_threshold_invalid' => 'เกณฑ์ในการเตือนต้องเป็นตัวเลขที่มากกว่า 0',
	),
	'config' => array(
		'general' => 'ทั่วไป',
		'language' => 'ภาษา',
		'show_update' => 'ตรวจสอบการอัพเดท?',
		'email_status' => 'อนุญาตให้ทำการส่งเมล์ได้',
		'email_from_email' => 'ที่อยู่อีเมล์ผู้ส่ง',
		'email_from_name' => 'ชื่อผู้ส่งอีเมล์',
		'email_smtp' => 'อนูญาตให้ใช้ SMTP',
		'email_smtp_host' => 'โฮสต์ SMTP',
		'email_smtp_port' => 'พอร์ต SMTP',
		'email_smtp_security' => 'ความปลอดภัย SMTP',
		'email_smtp_security_none' => 'ไม่มี',
		'email_smtp_username' => 'ชื่อผู้ใช้ SMTP',
		'email_smtp_password' => 'รหัสผ่าน SMTP',
		'email_smtp_noauth' => 'เว้นว่างหากไม่จำเป็นต้องตรวจสอบผู้ใช้',
		'sms_status' => 'อนุญาตให้ส่งข้อความสั้น',
		'sms_gateway' => 'เกตเวย์สำหรับส่งข้อความสั้น',
		'sms_gateway_mosms' => 'Mosms',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
        'sms_gateway_textmarketer' => 'Textmarketer',
		'sms_gateway_smsglobal' => 'SMSGlobal',
		'sms_gateway_smsit' => 'Smsit',
		'sms_gateway_username' => 'ชื่อผู้ใช้เกตเวย์',
		'sms_gateway_password' => 'รหัสผ่านเกตเวย์',
		'sms_from' => 'หมายเลขโทรศัพท์ผู้ส่ง',
		'pushover_status' => 'อนุญาตให้ส่งข้อความกับ Pushover',
		'pushover_description' => 'Pushover เป็นบริการในการส่งการเตือนตามเวลาจริงที่สะดวก หากต้องการข้อมูลสามารดูข้อมูลได้จาก <a href="https://pushover.net/">เว็บไซต์ผู้ให้บริการ</a> ',
		'pushover_clone_app' => 'คลิกที่นี่เพื่อสร้างแอพ Pushover ของคุณ',
		'pushover_api_token' => 'Pushover App API Token',
		'pushover_api_token_description' => 'ก่อนที่คุณจะใช้งาน Pushover, คุณจำเป็นต้อง <a href="%1$s" target="_blank">ลงทะเบียนแอพ</a> ที่เว็บไซต์ของพวกเขาก่อนหลังจากนั้นจึงป้อนค่า App API Token ที่นี่.',
		'alert_type' => 'เลือกเมื่อคุณต้องการรับการแจ้งเตือน',
        'alert_type_description' => '<b>สถานะที่เปลี่ยน :</b> '.
		    'คุณจะได้รับการแจ้งเตือนเมื่อเครื่องแม่ข่ายมีการเปลี่ยนแปลงสถานะ จากออนไลน์ -> ออฟไลน์หรือออฟไลน์ -> ออนไลน์ <br/>'.
		    '<br /><b>ออฟไลน์ :</b> '.
		    'คุณจะได้รับการแจ้งเตือนเมื่อเครื่องแม่ข่ายออฟไลน์สำหรับ *ครั้งแรกเท่านั้น* ตัวอย่างเช่น'.
		    ' cronjob ของคุณคือทุกๆ 15 นาที และเครื่องแม่ข่ายของคุณมีการดับในเวลา 1:00 น. และยังคงดับต่อไปถึง 6 โมงเช้า'.
		    'คุณจะได้รับการแจ้งเตือน 1 ครั้งตอน 1:00 น. เพียงเท่านั้น<br/>'.
		    '<br><b>สม่ำเสมอ :</b> '.
		    'คุณจะได้รับการแจ้งเตือนทุกครั้งที่สคริปต์ทำงานและเครื่องแม่ข่ายไม่ทำงานแม้ว่าเครื่องแม่ข่ายจะออฟไลน์เป็นเวลาหลายชั่วโมงก็ตาม',
		'alert_type_status' => 'มีการเปลี่ยนสถานะ',
		'alert_type_offline' => 'ออฟไลน์',
		'alert_type_always' => 'สม่ำเสมอ',
		'log_status' => 'บันทึกสถานะ',
		'log_status_description' => 'ถ้าสถานะของบันทึกสถานะถูกตั้งเป็น ถูก ระบบจะบันทึกเหตุการณ์เมื่อใดก็ตามที่มีการแจ้งเตือน',
		'log_email' => 'บันทึกอีเมล์ที่ส่งโดยสคริปต์',
		'log_sms' => 'บันทึกข้อความสั้นที่ส่งโดยสคริปต์',
		'log_pushover' => 'บันทึกข้อความ pushover ที่ส่งโดยสคริปต์',
		'updated' => 'การตั้งค่าได้รับการปรับปรุงแล้ว',
		'tab_email' => 'อีเมล์',
		'tab_sms' => 'SMS',
		'tab_pushover' => 'Pushover',
		'settings_email' => 'การตั้งค่าอีเมล์',
		'settings_sms' => 'การตั้งค่าข้อความสั้น',
		'settings_pushover' => 'การตั้งค่า Pushover',
		'settings_notification' => 'การตั้งค่าการแจ้งเตือน',
		'settings_log' => 'การตั้งค่าบันทึกสถานะ',
		'auto_refresh' => 'รีเฟรชอัตโนมัติ',
		'auto_refresh_servers' =>
			'หน้าเครื่องแม่ข่ายรีเฟรชอัตโนมัติ'.
			'<span class="small">'.
			'เวลาหน่วยเป็นวินาที ถ้า 0 จะไม่มีการรีเฟรช'.
			'</span>',
		'seconds' => 'วินาที',
		'test' => 'ทดสอบ',
		'test_email' => 'อีเมลจะถูกส่งไปยังที่อยู่ที่ระบุในโปรไฟล์ผู้ใช้ของคุณ',
		'test_sms' => 'SMS จะถูกส่งไปยังหมายเลขโทรศัพท์ที่ระบุในโปรไฟล์ผู้ใช้ของคุณ',
		'test_pushover' => 'การแจ้งเตือน Pushover ไปยังคีย์/อุปกรณ์ของผู้ใช้ที่ระบุในโปรไฟล์ผู้ใช้ของคุณ',
		'send' => 'ส่ง',
		'test_subject' => 'ทดสอบ',
		'test_message' => 'ข้อความทดสอบ',
		'email_sent' => 'ส่งอีเมล์แล้ว',
		'email_error' => 'พบข้อผิดพลาดในการส่งเมล์',
		'sms_sent' => 'ส่ง SMS แล้ว',
		'sms_error' => 'พบข้อผิดพลาดในการส่ง SMS',
		'sms_error_nomobile' => 'ไม่สามารถทดสอบส่ง SMS ได้ เนื่องจาก : ไม่พบหมายเลขโทรศัพท์ที่ถูกต้องในโปรไฟล์ของคุณ',
		'pushover_sent' => 'ส่งการแจ้งเตือนแบบ Pushover แล้ว',
		'pushover_error' => 'พบข้อผิดพลาดในการส่งการแจ้งเตือน Pushover : %s',
		'pushover_error_noapp' => 'ไม่สามารถส่งการทดสอบแจ้งเตือนได้ เนื่องจาก : ไม่พบ Pushover App API token ในการตั้งค่าโดยรวม.',
		'pushover_error_nokey' => 'ไม่สามารถส่งการทดสอบแจ้งเตือนได้ เนื่องจาก : ไม่พบ Pushover key ในโปรไฟล์ของคุณ',
		'log_retention_period' => 'ระยะเวลาในการเก็บบันทึกสถานะ',
		'log_retention_period_description' => 'จำนวนวันที่จะเก็บบันทึกสถานะของการแจ้งเตือนและเก็บบันทึกเวลาทำงานของเซิร์ฟเวอร์ ป้อน 0 เพื่อเก็บตลอดไป',
		'log_retention_days' => 'วัน',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'เครื่องแม่ข่าย \'%LABEL%\' ได้หยุดการทำงาน: ไอพี=%IP%, พอร์ต=%PORT%. ข้อผิดพลาด=%ERROR%',
		'off_email_subject' => 'สำคัญ: เครื่องแม่ข่าย \'%LABEL%\' ได้หยุดการทำงาน',
		'off_email_body' => "ไม่สามารถเชื่อมต่อกับเครื่องแม่ข่ายต่อไปนี้ได้ :<br/><br/>เครื่องแม่ข่าย: %LABEL%<br/>ไอพี: %IP%<br/>พอร์ต: %PORT%<br/>ข้อผิดพลาด: %ERROR%<br/>วันที่: %DATE%",
		'off_pushover_title' => 'เครื่องแม่ข่าย \'%LABEL%\' ได้หยุดการทำงาน',
		'off_pushover_message' => "ไม่สามารถเชื่อมต่อกับเครื่องแม่ข่ายต่อไปนี้ได้ :<br/><br/>เครื่องแม่ข่าย : %LABEL%<br/>ไอพี: %IP%<br/>พอร์ต: %PORT%<br/>ข้อผิดพลาด: %ERROR%<br/>วันที่: %DATE%",
		'on_sms' => 'เครื่องแม่ข่าย \'%LABEL%\' ยังทำงานอยู่ : ไอพี=%IP%, พอร์ต=%PORT%',
		'on_email_subject' => 'สำคัญ: เครื่องแม่ข่าย \'%LABEL%\' ยังทำงานอยู่',
		'on_email_body' => "เครื่องแม่ข่าย '%LABEL%' กลับมาทำงานแล้ว:<br/><br/>เครื่องแม่ข่าย: %LABEL%<br/>ไอพี: %IP%<br/>พอร์ต: %PORT%<br/>วันที่: %DATE%",
		'on_pushover_title' => 'เครื่องแม่ข่าย \'%LABEL%\' ยังทำงานอยู่',
		'on_pushover_message' => 'เครื่องแม่ข่าย \'%LABEL%\' กลับมาทำงานแล้ว:<br/><br/>เครื่องแม่ข่าย: %LABEL%<br/>ไอพี: %IP%<br/>พอร์ต: %PORT%<br/>วันที่: %DATE%',
	),
	'login' => array(
		'welcome_usermenu' => 'ยินดีต้อนรับ, %user_name%',
		'title_sign_in' => 'กรุณาเข้าสู่ระบบ',
		'title_forgot' => 'ลืมรหัสผ่านหรือเปล่า?',
		'title_reset' => 'รีเซ็ตรหัสผ่าน',
		'submit' => 'ส่ง',
		'remember_me' => 'จดจำฉันไว้',
		'login' => 'เข้าสู่ระบบ',
		'logout' => 'ออกจากระบบ',
		'username' => 'ชื่อผู้ใช้',
		'password' => 'รหัสผ่าน',
		'password_repeat' => 'รหัสผ่านอีกครั้ง',
		'password_forgot' => 'ลืมรหัสผ่าน?',
		'password_reset' => 'รีเซ็ตรหัสผ่าน',
		'password_reset_email_subject' => 'รีเซ็ตรหัสผ่านสำหรับ PHP Server Monitor',
		'password_reset_email_body' => 'กรุณาใช้ลิงค์ที่แนบมานี้เพื่อทำการรีเซ็ตรหัสผ่าน หมายเหตุลิงค์จะหมดอายุใน  1 ชั่วโมง <br/><br/>%link%',
		'error_user_incorrect' => 'ไม่พบชื่อผู้ใช้ที่ระบุมา',
		'error_login_incorrect' => 'ข้อมูลที่ระบุไม่ถูกต้อง',
		'error_login_passwords_nomatch' => 'รหัสผ่านที่ป้อนไม่ตรงกัน',
		'error_reset_invalid_link' => 'ลิงค์สำหรับรีเซ้ตไม่ถูกต้อง',
		'success_password_forgot' => 'อีเมล์สำหรับการรีเซ็ตรหัสผ่านได้ถูกส่งไปยังคุณเรียบร้อยแล้ว',
		'success_password_reset' => 'รหัสผ่านของคุณได้รับการรีเซ็ตแล้ว กรุณาเข้าสู่ระบบ',
	),
	'error' => array(
		'401_unauthorized' => 'ไม่ได้รับอนุญาต',
		'401_unauthorized_description' => 'คุณไม่มีสิทธิ์ในการดูหน้านี้',
	),
);
