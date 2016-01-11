<?php

// Language definitions used in admin-groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'그룹 칭호를 넣어야 한다.',
'Title already exists message'	=>	'칭호 <strong>%s</strong>를 가진 그룹이 이미 있다.',
'Default group redirect'		=>	'기본 그룹을 설정했다. Redirecting …',
'Cannot remove default message'	=>	'기본 그룹은 없앨 수 없다. 이 그룹을 지우려면 먼저 다른 그룹을 기본으로 설정해야 한다.',
'Group removed redirect'		=>	'그룹을 없앴다. Redirecting …',
'Group added redirect'			=>	'그룹을 더했다. Redirecting …',
'Group edited redirect'			=>	'그룹을 고쳤다. Redirecting …',

'Add groups head'				=>	'그룹 더하기/설정하기',
'Add group subhead'				=>	'새로운 그룹을 더한다',
'New group label'				=>	'새로운 그룹의 기반',
'New group help'				=>	'새로운 그룹이 권한 설정을 물려받을 그룹을 골라라. 다음 쪽에서 그 설정을 조율할 것이다.',
'Default group subhead'			=>	'기본 그룹 설정하기',
'Default group label'			=>	'기본 그룹',
'Default group help'			=>	'기본 그룹. 즉, 가입한 회원이 놓일 그룹. 보안을 위해 회원을 기본으로 지킴이나 다룸이 그룹에 놓을 수는 없다.',
'Existing groups head'			=>	'기존 그룹',
'Edit groups subhead'			=>	'그룹 고치기/지우기',
'Edit groups info'				=>	'미리 정의된 그룹인 손님, 다룸이, 지킴이, 회원은 지울 수 없지만 고칠 수는 있다. 어떤 그룹에서 어떤 옵션을 쓸 수 없는지를 알아야 한다 (즉, 손님의 <em>글 고치기</em> 권한). 다룸이는 언제나 모든 권한을 가진다.',
'Edit link'						=>	'고치기',
'Delete link'					=>	'지우기',
'Group delete head'				=>	'그룹 지우기',
'Confirm delete subhead'		=>	'그룹 지우기 확인하기',
'Confirm delete info'			=>	'그룹 <strong>%s</strong>를 정말 지울꺼야?',
'Confirm delete warn'			=>	'경고! 그룹을 지운 뒤에는 복구할 수 없다.',
'Delete group head'				=>	'그룹 지우기',
'Move users subhead'			=>	'그룹의 회원 옮기기',
'Move users info'				=>	'그룹 <strong>%s</strong>는 지금 <strong>%s</strong> 명의 회원을 가지고 있다. 이 회원을 옮길 그룹을 골라라.',
'Move users label'				=>	'회원 옮길 곳',
'Delete group'					=>	'그룹 지우기',

'Group settings head'			=>	'그룹 설정',
'Group settings subhead'		=>	'그룹 옵션과 권한을 설정한다',
'Group settings info'			=>	'아래 옵션과 권한은 그룹의 기본 권한이다. 지정된 권한이 있는 포럼이 없다면 이 옵션이 적용된다.',
'Group title label'				=>	'그룹 칭호',
'User title label'				=>	'회원 칭호',
//'User title help'				=>	'이 칭호는 그룹 안의 회원이 가지고 있는 모든 등급을 덮어쓸 것이다. 기본 칭호나 등급을 쓰려면 빈칸으로 두어라.',  <= 1.4
'User title help'				=>	'이 그룹 안의 등급 회원이 가진다. 기본 칭호 ("%s")를 쓰려면 빈칸으로 두어라.',
'Promote users label'			=>	'회원 승급시키기',
'Promote users help'			=>	'올린 글이 특정 갯수에 이르면, 자동으로 회원을 새로운 그룹으로 승급시킬 수 있다. 끄려면 "%s" 를 골라라. 보안을 위해 여기서 다룸이 그룹을 고를 수 있게하지 아니하였다. 또한, 이 설정으로 조건을 만족시킨 회원은 다음에 새로운 글을 올리면 그룹이 바뀐다는 것을 알아라.',
'Disable promotion'				=>	'승급시키기 끄기',
'Mod privileges label'			=>	'회원에게 지킴이 특권 주기',
'Mod privileges help'			=>	'이 그룹에 있는 회원에게 지킴이 능력을 주려면 회원을 하나 이상의 포럼을 다루도록 임명해야 한다. 이것은 회원 프로필의 다룸판을 통해 한다.',
'Edit profile label'			=>	'지킴이가 회원의 프로필을 고칠 수 있게 하기',
'Edit profile help'				=>	'지킴이 특권을 켰다면 이 그룹의 회원은 다른 회원의 프로필을 고칠 수 있게 된다.',
'Rename users label'			=>	'지킴이가 회원의 이름을 고칠 수 있게 하기',
'Rename users help'				=>	'지킴이 특권을 켰다면 이 그룹의 휘원은 다른 회원의 이름을 고칠 수 있게 된다.',
'Change passwords label'		=>	'지킴이가 비밀번호를 바꿀 수 있게 하기',
'Change passwords help'			=>	'지킴이 특권을 켰다면 이 그룹의 회원은 다른 회원의 비밀번호를 바꿀 수 있게 된다.',
'Ban users label'				=>	'지킴이가 회원을 금지시킬 수 있게 하기',
'Ban users help'				=>	'지킴이 특권을 켰다면 이 그룹의 회원은 다른 회원을 금지시킬 수 있다.',
'Read board label'				=>	'게시판 읽기',
'Read board help'				=>	'이 그룹의 회원이 게시판을 볼 수 있게 한다. 이 설정은 게시판의 모든 곳에 적용되고 또한 포럼의 지정 설정이 덮어쓸 수 없다. 이 것을 "아니"로 설정하면 이 그룹의 회원은 로그인/로그아웃과 가입만 할 수 있게 된다.',
'View user info label'			=>	'회원 정보 보기',
'View user info help'			=>	'회원 목록과 프로필을 볼 수 있게 한다.',
'Post replies label'			=>	'댓글 달기',
'Post replies help'				=>	'이 그룹의 회원이 글타래에서 댓글을 달 수 있게 한다.',
'Post topics label'				=>	'글타래 만들기',
'Post topics help'				=>	'이 그룹의 회원이 새로운 글타래를 올릴 수 있게 한다.',
'Edit posts label'				=>	'글 고치기',
'Edit posts help'				=>	'이 그룹의 회원이 자신의 글을 고칠 수 있게 한다.',
'Delete posts label'			=>	'글 지우기',
'Delete posts help'				=>	'이 그룹의 회원이 자신의 글을 지울 수 있게 한다.',
'Delete topics label'			=>	'글타래 지우기',
'Delete topics help'			=>	'이 그룹의 회원이 자신의 글타래 (모든 댓글 포함)를 지울 수 있게 한다.',
'Post links label'				=>	'글 이음고리',
'Post links help'				=>	'그룹 안의 회원이 올린 글에 이음고리를 넣게 하도록 한다. 또한 이 설정은 회원의 프로필에 있슨 서명과 website 칸도 들어맞는다.',
'Set own title label'			=>	'자신의 칭호 설정하기',
'Set own title help'			=>	'이 그룹의 회원이 자신의 칭호를 설정할 수 있게 한다.',
'User search label'				=>	'찾기 쓰기',
'User search help'				=>	'이 그룹의 회원이 찾기 기능을 쓸 수 있게 한다.',
'User list search label'		=>	'회원 목록 찾기',
'User list search help'			=>	'이 그룹의 회원이 회원 목록에서 회원 찾기를 할 수 있게 한다.',
'Send e-mails label'			=>	'e-mail 보내기',
'Send e-mails help'				=>	'이 그룹의 회원이 다른 회원에게 e-mail을 보낼 수 있게 한다.',
'Post flood label'				=>	'글 올리기 간격',
'Post flood help'				=>	'이 그룹의 회원이 다시 글을 올릴 수 있을 때까지 기다려야 하는 시간 (초). 끄려면 "0"으로 설정해라.',
'Search flood label'			=>	'찾기 간격',
'Search flood help'				=>	'이 그룹의 회원이 다시 찾기를 할 수 있을 때까지 가다려야 하는 시간 (초). 끄려면 "0"으로 설정해라.',
'E-mail flood label'			=>	'Email 간격',
'E-mail flood help'				=>	'이 그룹의 회원이 다시 메일을 보낼 수 있을 때까지 기다려야 하는 시간 (초). 끄려면 "0"으로 설정해라.',
'Report flood label'			=>	'신고 간격',
'Report flood help'				=>	'이 그룹의 회원이 다시 신고를 할 수 있을 때까지 기다려야 하는 시간 (초). 끄려면 "0"으로 설정해라.',
'Moderator info'				=>	'이 그룹의 회원이 지킴이 능력을 가지게 하려면 회원을 하나 이상의 포럼을 다루도록 임명해야 한다는 것을 기억해라. 이것은 회원 프로필의 다룸판을 통해서 한다.',

);
