# EHRM (Backend)

## Tech stack
   1. laravel 4.2.8
   2. php 7.4.3
   3. mysql 8.0.26

## Desciption

EHRM (Electronic human resource management) คือ ระบบการจัดการด้าน hr ให้แก่บริษัท โดยพนักงานสามารถลงบันทึกเวลาเข้างานและออกงานได้ อีกทั้งยังสามารถลางานได้จากระบบอีกด้วย ทำให้ฝายทรัพยากรมนุษย์สามารถตรวจสอบข้อมูลย้อนหลังในการประเมินรายปีได้อีกด้วย

## Setup required
```
composer install
```
```
composer dump-autoload
```
```
composer require tymon/jwt-auth
```
```
php artisan jwt:secret
```

## Setup database

1. แก้ไขไฟล์ `.env`

   * DB_CONNECTION=mysql           
      
      (กำหนด database)
    
   * DB_HOST=127.0.0.1             
    
      (กำหนด database host)
    
   * DB_PORT=3306                  
     
      (กำหนด database port)
    
   * DB_DATABASE=ehrm             
     
      (กำหนด ชื่อ database)
     
   * DB_USERNAME=root             
      
       (กำหนด username ของ database)
     
   * DB_PASSWORD=password         
      
       (กำหนด password ของ database)
       
2. สร้าง database ตามชื่อที่เรากำหนดในข้อ 1.4
3. ```php aritsan migrate:refresh --seed```

## Config ข้อมูลก่อนเริ่มใช้งาน
1. เข้าไปที่ `.env`

2. แก้ไขค่าของตัวแปร

    * SICK_LEAVE_DAYS=30            
     
      (กำหนดวันลาป่วย)

    * PERSONAL_LEAVE_DAYS=10        
     
      (กำหนดวันลากิจ)

    * VACATION_LEAVE_DAYS=10        
     
      (กำหนดวันลาพักร้อน)

    * MATERNITY_LEAVE_DAYS=98       
     
      (กำหนดวันลาคลอด)

    * LATE_TIME=09:15:00            
     
      (กำหนดเวลาเข้างานสาย)

    * OUT_TIME=18:30:00             
     
      (กำหนดเวลาออกงาน)
    
3. บันทึกไฟล์

## run server
```
php artisan serve
```

## Database

leaves

- ตารางแสดงวันลาของพนักงานแต่ละคน

logs

- ตารางแสดงสเตตัสของพนักงานในการทำงานของแต่ละวัน

users

- ตารางแสดงข้อมูลของพนักงานแต่ละคน


## user example
```
admin : 

    email : admin@admin.com
    password : password
```
```
header :

    hr department
        email : hr@user.com
        password : password

    sale department
        email : sale@user.com
        password : password

    it department
        email : it@user.com
        password : password
```
```
users : 

    hr department
        email : user1@hr.com
        password : password
        email : user2@hr.com
        password : password
        email : user3@hr.com
        password : password
        
    sale department
        email : user1@sale.com
        password : password
        email : user2@sale.com
        password : password
        email : user3@sale.com
        password : password
    
    it department
        email : user1@it.com
        password : password
        email : user2@it.com
        password : password
        email : user3@it.com
        password : password
```

## frontend
https://github.com/kollawachhh/ehrm-frontend

## Role
### Admin เจ้าหน้าที่ตรวจสอบระบบ
    - สร้าง user ในระบบ
    - ตรวจสอบ logs และ leaves ของ users ทั้งหมด
### Header หัวหน้าแผนก
    - ลงชื่อเข้า / ออก เวลาทำงาน
    - ขอลางาน
    - อนุมัติการลาของพนักงานในแผนก
### User พนักงานทั่วไป
    - ลงชื่อเข้า / ออก เวลาทำงาน
    - ขอลางาน
