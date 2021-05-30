# DB 생성
DROP DATABASE IF EXISTS new_php_blog;
CREATE DATABASE new_php_blog;
USE new_php_blog;

# article table 생성
CREATE TABLE article(
  id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  memberId INT(10) UNSIGNED NOT NULL,
  boardId INT(10) UNSIGNED NOT NULL,
  regDate DATETIME NOT NULL,
  updateDate DATETIME NOT NULL,
  title VARCHAR(20) NOT NULL,
  `body` TEXT NOT NULL
);

# test article 생성
INSERT INTO article
SET memberId = 2,
boardId = 2,
regDate = NOW(),
updateDate = NOW(),
title = '제목1',
`body` = '피카츄라이츄파이리꼬부기';

INSERT INTO article
SET memberId = 3,
boardId = 2,
regDate = NOW(),
updateDate = NOW(),
title = '제목2',
`body` = '버터플야도란피죤투또가스';

INSERT INTO article
SET memberId = 4,
boardId = 3,
regDate = NOW(),
updateDate = NOW(),
title = '제목3',
`body` = '서로 생긴 모습은 달라도';

SELECT LAST_INSERT_ID();

CREATE TABLE `member`(
  id INT(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  regDate DATETIME NOT NULL,
  updateDate DATETIME NOT NULL,
  loginId VARCHAR(20) NOT NULL,
  loginPw VARCHAR(100) NOT NULL,
  `name` VARCHAR(20) NOT NULL,
  nickName VARCHAR(20) NOT NULL,
  email VARCHAR(100) NOT NULL
);

