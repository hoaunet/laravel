 <ul class="sidebar-menu" data-widget="tree">
  <li class="header">献立</li>       
  <li class="active treeview menu-open">
    <a href="#"><i class="fa fa-cubes"></i> <span>管理者</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
      <ul class="treeview-menu">
        <li class="active"><a href="{{route('backend.dashboard.index')}}"><i class="fa fa-dashboard"></i> 計器盤</a></li>
        <li ><a href="{{route('backend.company.index')}}"><i class="fa fa-building-o"></i> 会社の構成</a></li>
        <li class="treeview"><a href="#"><i class="fa fa-columns"></i> ジョブの詳細設定 <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.jobstitle.index')}}"><i class="fa fa-columns"></i> 仕事のタイトル</a></li>
            <li><a href="{{route('backend.paygrade.index')}}"><i class="fa fa-credit-card"></i> 有料グレード</a></li>
            <li><a href="{{route('backend.employmentstatus.index')}}"><i class="fa fa-university"></i> 雇用状況</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-check-square-o"></i> 資格の設定 <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.skill.index')}}"><i class="fa fa-check-square-o"></i> 技量</a></li>
            <li><a href="{{route('backend.education.index')}}"><i class="fa fa-credit-card"></i> 教育</a></li>
            <li><a href="{{route('backend.certification.index')}}"><i class="fa fa-university"></i> 認定</a></li>
            <li><a href="{{route('backend.language.index')}}"><i class="fa fa-language"></i>言語</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-list-alt"></i> プロジェクト/クライアント 設定 <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.client.index')}}"><i class="fa fa-list-alt"></i>顧客</a></li>
            <li><a href="{{route('backend.project.index')}}"><i class="fa fa-credit-card"></i> プロジェクト</a></li>            
            <li><a href="{{route('backend.employeeproject.index')}}"><i class="fa fa-language"></i>従業員プロジェクト</a></li>
          </ul>
        </li>
        <li class="treeview"><a href="#"><i class="fa fa-shield"></i> 会社ローン <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="{{route('backend.loan.index')}}"><i class="fa fa-shield"></i>ローンタイプ</a></li>
            <li><a href="{{route('backend.employeeloan.index')}}"><i class="fa fa-square"></i>従業員ローン</a></li>            
          </ul>
        </li> 
      </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-users"></i> <span>社員マスタの管理</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li class="treeview"><a href="#"><i class="fa fa-users"></i>社員  <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
         <ul class="treeview-menu">
          <li><a href="{{route('backend.employee.index')}}"><i class="fa fa-search-plus"></i> 社員</a></li>
          <li><a href="{{route('backend.employeeskill.index')}}"><i class="fa fa-list-alt"></i> 技量</a></li>
          <li><a href="{{route('backend.employeeeducation.index')}}"><i class="fa fa-align-center"></i> 教育</a></li>
          <li><a href="{{route('backend.employeecertification.index')}}"><i class="fa fa-align-center"></i> 認定</a></li>
          <li><a href="{{route('backend.employeelanguage.index')}}"><i class="fa fa-align-center"></i> 言語</a></li>
          <li><a href="{{route('backend.employeedependent.index')}}"><i class="fa fa-align-center"></i> 依存</a></li>
          <li><a href="{{route('backend.emergencycontact.index')}}"><i class="fa fa-align-center"></i> 緊急連絡</a></li>          
        </ul>
      </li>
      <li class="treeview"><a href="{{route('backend.travel.index')}}"><i class="fa fa-plane"></i>旅行管理  </a></li>
      <li class="treeview"><a href="{{route('backend.attendance.index')}}"><i class="fa fa-clock-o"></i>出席を監視する </a></li>      
      <li class="treeview"><a href="#"><i class="fa fa-window-maximize"></i> 「データの抽出と表示
                          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu">
          <li><a href="{{route('backend.overtime.index')}}"><i class="fa fa-search-plus"></i> 残業カテゴリー</a></li>
          <li><a href="{{route('backend.employeeovertime.regist')}}"><i class="fa fa-list-alt"></i> 超過要求</a></li>         
        </ul>
      </li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-file-text"></i> <span>管理者レポート</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li class="treeview"><a href="#"><i class="fa fa-file-o"></i>報告 </a></li>      
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-file-text"></i> <span>給与計算</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li class="treeview"><a href="#"><i class="fa fa-file-o"></i>給料 <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
        <ul class="treeview-menu">
          <li ><a href="{{route('backend.salarytype.index')}}"><i class="fa fa-file-o"></i>給与タイプ </a></li> 
          <li ><a href="{{route('backend.salary.index')}}"><i class="fa fa-file-o"></i>給与コンポーネント </a></li>
          <li ><a href="{{route('backend.employeesalary.index')}}"><i class="fa fa-file-o"></i>従業員の給与 </a></li>     
        </ul>
      </li>
      <li class="treeview"><a href="#"><i class="fa fa-file-o"></i>給与計算レポート <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
          <li ><a href="{{route('backend.companypayroll.index')}}"><i class="fa fa-file-o"></i>会社給与計算</a></li> 
          <li ><a href="{{route('backend.payrollreport.index')}}"><i class="fa fa-file-o"></i>給与計算レポート </a></li>
          <li ><a href="{{route('backend.payrollcolunm.index')}}"><i class="fa fa-file-o"></i>給与計算列 </a></li> 
          <li ><a href="{{route('backend.calculationgroup.index')}}"><i class="fa fa-file-o"></i>計算グループ</a></li> 
          <li ><a href="{{route('backend.calculationmethod.index')}}"><i class="fa fa-file-o"></i>計算方法 </a></li>
          <li ><a href="{{route('backend.payslip.index')}}"><i class="fa fa-file-o"></i>ペイプルプテンプレート </a></li>     
        </ul>
      </li>      
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-male"></i> <span>個人情報</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li ><a href="{{route('backend.personal.index')}}"><i class="fa fa-desktop"></i>計器盤 </a></li>
      <li ><a href="{{route('backend.employee.detail',1)}}"><i class="fa fa-user"></i>基本情報 </a></li>
      <li class="treeview"><a href="#"><i class="fa fa-graduation-cap"></i>資格<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
         <ul class="treeview-menu">
            <li ><a href="{{route('backend.personalskill.index')}}"><i class="fa fa-file-o"></i>技量</a></li> 
            <li ><a href="{{route('backend.personaleducation.index')}}"><i class="fa fa-file-o"></i>教育 </a></li>
            <li><a href="{{route('backend.personalcertification.index')}}"><i class="fa fa-align-center"></i> 認定</a></li>
            <li><a href="{{route('backend.personallanguage.index')}}"><i class="fa fa-align-center"></i> 言語</a></li>  
        </ul>
      </li>
      <li ><a href="{{route('backend.personaldependence.index')}}"><i class="fa fa-sliders"></i>扶養家族</a></li>
      <li ><a href="{{route('backend.personalemergencycontact.index')}}"><i class="fa fa-phone-square"></i>緊急連絡先</a></li>      
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-clock-o"></i> <span>時間管理</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li ><a href="{{route('backend.projecttime.index')}}"><i class="fa fa-pencil-square"></i>プロジェクト </a></li>
      <li ><a href="{{route('backend.attendancetime.index')}}"><i class="fa fa-user"></i>基本情報 </a></li>
      <li ><a href="{{route('backend.timesheet.index')}}"><i class="fa fa-graduation-cap"></i>資格</a></li>
      <li ><a href="{{route('backend.overtimerequest.index')}}"><i class="fa fa-sliders"></i>超過要求</a></li>            
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-plane"></i> <span>旅行管理</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li ><a href="#"><i class="fa fa-plane"></i>旅行 </a></li> 
      <li ><a href="#"><i class="fa fa-plane"></i>従属旅行のリクエスト </a></li> 
      <li ><a href="#"><i class="fa fa-plane"></i>トラベルリクエスト承認 </a></li>            
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-money"></i> <span>財政</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li ><a href="#"><i class="fa fa-calculator"></i>給料 </a></li> 
      <li ><a href="#"><i class="fa fa-shield"></i>ローン </a></li>            
    </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-file-text"></i> <span>ユーザーレポート</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li ><a href="#"><i class="fa fa-file-o"></i>レポート </a></li>            
    </ul>
  </li>
  
  <li class="treeview">
    <a href="#"><i class="fa fa-folder"></i> <span>データのインポート</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li class="treeview"><a href="#"><i class="fa fa-address-card"></i> データ管理  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span></a>
                <ul class="treeview-menu">
                  <li><a href="{{route('backend.timecard.index')}}"><i class="fa fa-circle-o"></i> データの取り込み</a></li>
                  <li><a href="{{route('backend.timecard.regist')}}"><i class="fa fa-circle-o"></i> フォーマットの指定</a></li>
                </ul>  
            </li>
            <li class="treeview"><a href="{{route('backend.door.index')}}"><i class="fa fa-window-maximize"></i> 「入退出」の管理
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                  <li><a href="{{route('backend.timecard.index')}}"><i class="fa fa-circle-o"></i> データの取り込み</a></li>
                  <li><a href="{{route('backend.timecard.regist')}}"><i class="fa fa-circle-o"></i> フォーマットの指定</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="{{route('backend.pc.import')}}"><i class="fa fa-tablet"></i> 「PCログ」の管理
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
                  <li><a href="{{route('backend.timecard.index')}}"><i class="fa fa-television"></i> データの取り込み</a></li>
                  <li><a href="{{route('backend.timecard.regist')}}"><i class="fa fa-window-restore"></i> フォーマットの指定</a></li>
                </ul> 
            </li>     
            <li class="treeview"><a href="{{route('backend.users.index')}}"><i class="fa fa-user-circle"></i> ユーザー管理
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
              <ul class="treeview-menu">
                  <li><a href="{{route('backend.timecard.index')}}"><i class="fa fa-circle-o"></i> CSVの取り込み</a></li>
                  <li><a href="{{route('backend.timecard.regist')}}"><i class="fa fa-circle-o"></i> フォーマットの指定</a></li>
                </ul>                   
            </li> 
          </ul>
  </li>
  <li class="treeview">
    <a href="#"><i class="fa fa-cogs"></i> <span>システム</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li class="treeview"><a href="#"><i class="fa fa-cogs"></i>システム </a></li> 
      <li class="treeview"><a href="#"><i class="fa fa-user"></i>ユーザー </a></li> 
      <li class="treeview"><a href="#"><i class="fa fa-folder-open"></i>モジュールの管理 </a></li> 
      <li class="treeview"><a href="#"><i class="fa fa-unlock"></i>権限を管理する </a></li> 
      <li class="treeview"><a href="#"><i class="fa fa-sort-alpha-asc"></i>メタデータの管理 </a></li> 
      <li class="treeview"><a href="#"><i class="fa fa-sort-alpha-asc"></i>フィールド名の設定</a></li> 
    </ul>
  </li>  
</ul>