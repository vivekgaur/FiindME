


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>symphony-2/symphony/lib/toolkit/class.lang.php at master · symphonycms/symphony-2</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="https://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta property="og:image" content="https://github.global.ssl.fastly.net/images/modules/logos_page/Octocat.png">
    <meta name="hostname" content="fe4.rs.github.com">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="xhr-socket" href="/_sockets" />
    
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="3342760" name="octolytics-actor-id" /><meta content="vivekgaur" name="octolytics-actor-login" /><meta content="d89bbeee3f07a0103e75552eb282d144d4bf22992cb9becca99dd107b4abd387" name="octolytics-actor-hash" />

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="Lti9ewwo68fTZ68Gt6RhdTpkWgqQpmILBrf4AnXyRDI=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-a51b7140dfba9f0ae1fe0eaf345dd6a4381f4ef8.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-ec4f51bae74d4ad5725891dccaecd4cc727d8cdc.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-e8054ad804a1cf9e9849130fee5a4a5487b663ed.js" type="text/javascript"></script>
      <script src="https://github.global.ssl.fastly.net/assets/github-90f8e0e909066dd1bee7ca4e33b769e7a28f0e3f.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="2faa5dbb764a951963be37a67771af2b">

        <link data-pjax-transient rel='permalink' href='/symphonycms/symphony-2/blob/8b819febd351c85e725492e5cf17a6e0a6c552c8/symphony/lib/toolkit/class.lang.php'>
  <meta property="og:title" content="symphony-2"/>
  <meta property="og:type" content="githubog:gitrepository"/>
  <meta property="og:url" content="https://github.com/symphonycms/symphony-2"/>
  <meta property="og:image" content="https://github.global.ssl.fastly.net/images/gravatars/gravatar-user-420.png"/>
  <meta property="og:site_name" content="GitHub"/>
  <meta property="og:description" content="symphony-2 - This is the official Symphony 2 repository."/>

  <meta name="description" content="symphony-2 - This is the official Symphony 2 repository." />

  <meta content="334029" name="octolytics-dimension-user_id" /><meta content="symphonycms" name="octolytics-dimension-user_login" /><meta content="780341" name="octolytics-dimension-repository_id" /><meta content="symphonycms/symphony-2" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="780341" name="octolytics-dimension-repository_network_root_id" /><meta content="symphonycms/symphony-2" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/symphonycms/symphony-2/commits/master.atom" rel="alternate" title="Recent Commits to symphony-2:master" type="application/atom+xml" />

  </head>


  <body class="logged_in page-blob linux vis-public env-production ">

    <div class="wrapper">
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    <div class="divider-vertical"></div>

      <a href="/notifications" class="notification-indicator tooltipped downwards" title="You have no unread notifications">
    <span class="mail-status all-read"></span>
  </a>
  <div class="divider-vertical"></div>


      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="vivekgaur"
      data-repo="symphonycms/symphony-2"
      data-branch="master"
      data-sha="259371b4b174a5785ce16248a4dc46cd3d34b7f2"
  >

    <input type="hidden" name="nwo" value="symphonycms/symphony-2" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
            <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    

  

    <ul id="user-links">
      <li>
        <a href="/vivekgaur" class="name">
          <img height="20" src="https://secure.gravatar.com/avatar/64656218f18231b5c2eacfb613508822?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /> vivekgaur
        </a>
      </li>

        <li>
          <a href="/new" id="new_repo" class="tooltipped downwards" title="Create a new repo" aria-label="Create a new repo">
            <span class="octicon octicon-repo-create"></span>
          </a>
        </li>

        <li>
          <a href="/settings/profile" id="account_settings"
            class="tooltipped downwards"
            aria-label="Account settings "
            title="Account settings ">
            <span class="octicon octicon-tools"></span>
          </a>
        </li>
        <li>
          <a class="tooltipped downwards" href="/logout" data-method="post" id="logout" title="Sign out" aria-label="Sign out">
            <span class="octicon octicon-log-out"></span>
          </a>
        </li>

    </ul>


<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>



    <li class="section-title">
      <span title="symphonycms/symphony-2">This repository</span>
    </li>
    <li>
      <a href="/symphonycms/symphony-2/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
    </li>
</ul>

</div>


    
  </div>
</div>

      

      




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="Lti9ewwo68fTZ68Gt6RhdTpkWgqQpmILBrf4AnXyRDI=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="780341" />

    <div class="select-menu js-menu-container js-select-menu">
        <a class="social-count js-social-count" href="/symphonycms/symphony-2/watchers">
          54
        </a>
      <span class="minibutton select-menu-button with-count js-menu-target">
        <span class="js-select-button">
          <span class="octicon octicon-eye-watch"></span>
          Watch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container">

            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for discussions in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for discussions in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  
<div class="js-toggler-container js-social-container starring-container ">
  <a href="/symphonycms/symphony-2/unstar" class="minibutton with-count js-toggler-target star-button starred upwards" title="Unstar this repo" data-remote="true" data-method="post" rel="nofollow">
    <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
  </a>
  <a href="/symphonycms/symphony-2/star" class="minibutton with-count js-toggler-target star-button unstarred upwards " title="Star this repo" data-remote="true" data-method="post" rel="nofollow">
    <span class="octicon octicon-star"></span><span class="text">Star</span>
  </a>
  <a class="social-count js-social-count" href="/symphonycms/symphony-2/stargazers">403</a>
</div>

  </li>


        <li>
          <a href="/symphonycms/symphony-2/fork" class="minibutton with-count js-toggler-target fork-button lighter upwards" title="Fork this repo" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/symphonycms/symphony-2/network" class="social-count">127</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/symphonycms" class="url fn" itemprop="url" rel="author"><span itemprop="title">symphonycms</span></a></span
          ><span class="repohead-name-divider">/</span><strong
          ><a href="/symphonycms/symphony-2" class="js-current-repository js-repo-home-link">symphony-2</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">

      <div class="repository-with-sidebar repo-container ">

        <div class="repository-sidebar">
            

<div class="repo-nav repo-nav-full js-repository-container-pjax js-octicon-loaders">
  <div class="repo-nav-contents">
    <ul class="repo-menu">
      <li class="tooltipped leftwards" title="Code">
        <a href="/symphonycms/symphony-2" aria-label="Code" class="js-selected-navigation-item selected" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /symphonycms/symphony-2">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/symphonycms/symphony-2/issues" aria-label="Issues" class="js-selected-navigation-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /symphonycms/symphony-2/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>48</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests"><a href="/symphonycms/symphony-2/pulls" aria-label="Pull Requests" class="js-selected-navigation-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /symphonycms/symphony-2/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>2</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped leftwards" title="Wiki">
          <a href="/symphonycms/symphony-2/wiki" aria-label="Wiki" class="js-selected-navigation-item " data-pjax="true" data-selected-links="repo_wiki /symphonycms/symphony-2/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>


    </ul>
    <div class="repo-menu-separator"></div>
    <ul class="repo-menu">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/symphonycms/symphony-2/pulse" aria-label="Pulse" class="js-selected-navigation-item " data-pjax="true" data-selected-links="pulse /symphonycms/symphony-2/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/symphonycms/symphony-2/graphs" aria-label="Graphs" class="js-selected-navigation-item " data-pjax="true" data-selected-links="repo_graphs repo_contributors /symphonycms/symphony-2/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/symphonycms/symphony-2/network" aria-label="Network" class="js-selected-navigation-item js-disable-pjax" data-selected-links="repo_network /symphonycms/symphony-2/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    </ul>

  </div>
</div>

            <div class="only-with-full-nav">
              

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>

  <input type="text" class="clone js-url-field"
         value="https://github.com/symphonycms/symphony-2.git" readonly="readonly">

  <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/symphonycms/symphony-2.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone">
  <h3><strong>SSH</strong> clone URL</h3>

  <input type="text" class="clone js-url-field"
         value="git@github.com:symphonycms/symphony-2.git" readonly="readonly">

  <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:symphonycms/symphony-2.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>

  <input type="text" class="clone js-url-field"
         value="https://github.com/symphonycms/symphony-2" readonly="readonly">

  <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/symphonycms/symphony-2" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
</div>



<p class="clone-options">You can clone with
    <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
    <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
    <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>,
  and <a href="https://help.github.com/articles/which-remote-url-should-i-use">other methods.</a>
</p>



                <a href="/symphonycms/symphony-2/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
            </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:c66d3e9d31f257e7e5cbe1dff5c59341 -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:c66d3e9d31f257e7e5cbe1dff5c59341 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/symphonycms/symphony-2/find/master" data-pjax data-hotkey="t" style="display:none">Show File Finder</a>

<div class="file-navigation">
  


<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/devkits/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="devkits" data-skip-pjax="true" rel="nofollow" title="devkits">devkits</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/gh-pages/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="gh-pages" data-skip-pjax="true" rel="nofollow" title="gh-pages">gh-pages</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/integration/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="integration" data-skip-pjax="true" rel="nofollow" title="integration">integration</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/master/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="master" data-skip-pjax="true" rel="nofollow" title="master">master</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/xmlelement/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="xmlelement" data-skip-pjax="true" rel="nofollow" title="xmlelement">xmlelement</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/xmlelement-2012/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="xmlelement-2012" data-skip-pjax="true" rel="nofollow" title="xmlelement-2012">xmlelement-2012</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/rev5/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="rev5" data-skip-pjax="true" rel="nofollow" title="rev5">rev5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3beta3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3beta3" data-skip-pjax="true" rel="nofollow" title="2.3beta3">2.3beta3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3beta2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3beta2" data-skip-pjax="true" rel="nofollow" title="2.3beta2">2.3beta2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3beta1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3beta1" data-skip-pjax="true" rel="nofollow" title="2.3beta1">2.3beta1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3RC4/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3RC4" data-skip-pjax="true" rel="nofollow" title="2.3RC4">2.3RC4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3RC3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3RC3" data-skip-pjax="true" rel="nofollow" title="2.3RC3">2.3RC3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3RC2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3RC2" data-skip-pjax="true" rel="nofollow" title="2.3RC2">2.3RC2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3RC1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3RC1" data-skip-pjax="true" rel="nofollow" title="2.3RC1">2.3RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3beta3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3beta3" data-skip-pjax="true" rel="nofollow" title="2.3.3beta3">2.3.3beta3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3beta2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3beta2" data-skip-pjax="true" rel="nofollow" title="2.3.3beta2">2.3.3beta2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3beta1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3beta1" data-skip-pjax="true" rel="nofollow" title="2.3.3beta1">2.3.3beta1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3RC3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3RC3" data-skip-pjax="true" rel="nofollow" title="2.3.3RC3">2.3.3RC3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3RC2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3RC2" data-skip-pjax="true" rel="nofollow" title="2.3.3RC2">2.3.3RC2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3RC1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3RC1" data-skip-pjax="true" rel="nofollow" title="2.3.3RC1">2.3.3RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.3" data-skip-pjax="true" rel="nofollow" title="2.3.3">2.3.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.2beta2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.2beta2" data-skip-pjax="true" rel="nofollow" title="2.3.2beta2">2.3.2beta2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.2beta1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.2beta1" data-skip-pjax="true" rel="nofollow" title="2.3.2beta1">2.3.2beta1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.2RC2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.2RC2" data-skip-pjax="true" rel="nofollow" title="2.3.2RC2">2.3.2RC2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.2RC1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.2RC1" data-skip-pjax="true" rel="nofollow" title="2.3.2RC1">2.3.2RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.2" data-skip-pjax="true" rel="nofollow" title="2.3.2">2.3.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1beta2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1beta2" data-skip-pjax="true" rel="nofollow" title="2.3.1beta2">2.3.1beta2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1beta1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1beta1" data-skip-pjax="true" rel="nofollow" title="2.3.1beta1">2.3.1beta1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1RC3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1RC3" data-skip-pjax="true" rel="nofollow" title="2.3.1RC3">2.3.1RC3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1RC2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1RC2" data-skip-pjax="true" rel="nofollow" title="2.3.1RC2">2.3.1RC2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1RC1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1RC1" data-skip-pjax="true" rel="nofollow" title="2.3.1RC1">2.3.1RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3.1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3.1" data-skip-pjax="true" rel="nofollow" title="2.3.1">2.3.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.3" data-skip-pjax="true" rel="nofollow" title="2.3">2.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.5RC1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.5RC1" data-skip-pjax="true" rel="nofollow" title="2.2.5RC1">2.2.5RC1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.5/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.5" data-skip-pjax="true" rel="nofollow" title="2.2.5">2.2.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.4/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.4" data-skip-pjax="true" rel="nofollow" title="2.2.4">2.2.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.3" data-skip-pjax="true" rel="nofollow" title="2.2.3">2.2.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.2" data-skip-pjax="true" rel="nofollow" title="2.2.2">2.2.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2.1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2.1" data-skip-pjax="true" rel="nofollow" title="2.2.1">2.2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.2" data-skip-pjax="true" rel="nofollow" title="2.2">2.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.1.2.1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.1.2.1" data-skip-pjax="true" rel="nofollow" title="2.1.2.1">2.1.2.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.1.2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.1.2" data-skip-pjax="true" rel="nofollow" title="2.1.2">2.1.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.1.1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.1.1" data-skip-pjax="true" rel="nofollow" title="2.1.1">2.1.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.1.0/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.1.0" data-skip-pjax="true" rel="nofollow" title="2.1.0">2.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.7/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.7" data-skip-pjax="true" rel="nofollow" title="2.0.7">2.0.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.6/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.6" data-skip-pjax="true" rel="nofollow" title="2.0.6">2.0.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.5/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.5" data-skip-pjax="true" rel="nofollow" title="2.0.5">2.0.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.4/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.4" data-skip-pjax="true" rel="nofollow" title="2.0.4">2.0.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.3/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.3" data-skip-pjax="true" rel="nofollow" title="2.0.3">2.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.2/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.2" data-skip-pjax="true" rel="nofollow" title="2.0.2">2.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0.1/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0.1" data-skip-pjax="true" rel="nofollow" title="2.0.1">2.0.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/symphonycms/symphony-2/blob/2.0/symphony/lib/toolkit/class.lang.php" class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target" data-name="2.0" data-skip-pjax="true" rel="nofollow" title="2.0">2.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/symphonycms/symphony-2" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">symphony-2</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/symphonycms/symphony-2/tree/master/symphony" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">symphony</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/symphonycms/symphony-2/tree/master/symphony/lib" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">lib</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/symphonycms/symphony-2/tree/master/symphony/lib/toolkit" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">toolkit</span></a></span><span class="separator"> / </span><strong class="final-path">class.lang.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="symphony/lib/toolkit/class.lang.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/6be8e584a0f454ac2dc7600bdeaca7b7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/brendo" rel="author">brendo</a></span>
    <time class="js-relative-date" datetime="2013-03-04T00:53:39-08:00" title="2013-03-04 00:53:39">March 04, 2013</time>
    <div class="commit-title">
        <a href="/symphonycms/symphony-2/commit/1e74c061a9acfd9826823c3e0857f0b07320d06e" class="message" data-pjax="true">Don't rely on Exceptions to be thrown when finding Language classes, …</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>13</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="brendo" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=brendo"><img height="20" src="https://secure.gravatar.com/avatar/6be8e584a0f454ac2dc7600bdeaca7b7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="nilshoerrmann" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=nilshoerrmann"><img height="20" src="https://secure.gravatar.com/avatar/aac39c660844a5e8ac3aa09a99501f16?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="eKoeS" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=eKoeS"><img height="20" src="https://secure.gravatar.com/avatar/1b32fae892ca31c0f0c46eb7c7cc3964?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="ahwayakchih" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=ahwayakchih"><img height="20" src="https://secure.gravatar.com/avatar/9e5da2dee71ce7198a486fe06510950b?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="pointybeard" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=pointybeard"><img height="20" src="https://secure.gravatar.com/avatar/a454617457e6f2601e3beee32a74511e?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="tonyarnold" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=tonyarnold"><img height="20" src="https://secure.gravatar.com/avatar/6ee830e3f2ce3913e9aa8e800cacee25?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="cz" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=cz"><img height="20" src="https://secure.gravatar.com/avatar/d849d86f4a4abbc231028812a29ed5b1?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="rowan-lewis" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=rowan-lewis"><img height="20" src="https://secure.gravatar.com/avatar/f6a307fd0a675644cc1e1b457ed2e2dc?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="allen" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=allen"><img height="20" src="https://secure.gravatar.com/avatar/76a76733a9f16e46f0d8c88b5beac523?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="nils-werner" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=nils-werner"><img height="20" src="https://secure.gravatar.com/avatar/b18fc48caab5bf7c3e2a15292972f05b?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="andrrr" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=andrrr"><img height="20" src="https://secure.gravatar.com/avatar/c58e19987b4584e38e9609de16bb5186?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="rainerborene" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=rainerborene"><img height="20" src="https://secure.gravatar.com/avatar/3e1d1f436f37d912be4da944d44cf1e7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="vlad-ghita" href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php?author=vlad-ghita"><img height="20" src="https://secure.gravatar.com/avatar/9b43cf8fce4ff1fe56cb86f0f6bf7839?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/6be8e584a0f454ac2dc7600bdeaca7b7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/brendo">brendo</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/aac39c660844a5e8ac3aa09a99501f16?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/nilshoerrmann">nilshoerrmann</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/1b32fae892ca31c0f0c46eb7c7cc3964?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/eKoeS">eKoeS</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/9e5da2dee71ce7198a486fe06510950b?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/ahwayakchih">ahwayakchih</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/a454617457e6f2601e3beee32a74511e?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/pointybeard">pointybeard</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/6ee830e3f2ce3913e9aa8e800cacee25?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/tonyarnold">tonyarnold</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/d849d86f4a4abbc231028812a29ed5b1?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/cz">cz</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/f6a307fd0a675644cc1e1b457ed2e2dc?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/rowan-lewis">rowan-lewis</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/76a76733a9f16e46f0d8c88b5beac523?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/allen">allen</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/b18fc48caab5bf7c3e2a15292972f05b?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/nils-werner">nils-werner</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/c58e19987b4584e38e9609de16bb5186?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/andrrr">andrrr</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/3e1d1f436f37d912be4da944d44cf1e7?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/rainerborene">rainerborene</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://secure.gravatar.com/avatar/9b43cf8fce4ff1fe56cb86f0f6bf7839?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/vlad-ghita">vlad-ghita</a>
        </li>
      </ul>
    </div>
  </div>


<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">executable file</span>
          <span>591 lines (520 sloc)</span>
        <span>17.651 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
                <a class="minibutton tooltipped leftwards"
                   title="Clicking this button will automatically fork this project so you can edit the file"
                   href="/symphonycms/symphony-2/edit/master/symphony/lib/toolkit/class.lang.php"
                   data-method="post" rel="nofollow">Edit</a>
          <a href="/symphonycms/symphony-2/raw/master/symphony/lib/toolkit/class.lang.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/symphonycms/symphony-2/blame/master/symphony/lib/toolkit/class.lang.php" class="button minibutton ">Blame</a>
          <a href="/symphonycms/symphony-2/commits/master/symphony/lib/toolkit/class.lang.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
            <a class="minibutton danger empty-icon tooltipped downwards"
               href="/symphonycms/symphony-2/delete/master/symphony/lib/toolkit/class.lang.php"
               title="Fork this project and delete file" data-method="post" rel="nofollow">
            Delete
          </a>
      </div><!-- /.actions -->

    </div>
        <div class="blob-wrapper data type-php js-blob-data">
      <table class="file-code file-diff">
        <tr class="file-code-line">
          <td class="blob-line-nums">
            <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>

          </td>
          <td class="blob-line-code">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'>	<span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd">	 * @package toolkit</span></div><div class='line' id='LC4'><span class="sd">	 */</span></div><div class='line' id='LC5'>	<span class="sd">/**</span></div><div class='line' id='LC6'><span class="sd">	 * The translation function accepts an English string and returns its translation</span></div><div class='line' id='LC7'><span class="sd">	 * to the active system language. If the given string is not available in the</span></div><div class='line' id='LC8'><span class="sd">	 * current dictionary the original English string will be returned. Given an optional</span></div><div class='line' id='LC9'><span class="sd">	 * `$inserts` array, the function will replace translation placeholders using `vsprintf()`.</span></div><div class='line' id='LC10'><span class="sd">	 * Since Symphony 2.3, it is also possible to have multiple translation of the same string</span></div><div class='line' id='LC11'><span class="sd">	 * according to the page namespace (i.e. the value returned by Symphony&#39;s `getPageNamespace()`</span></div><div class='line' id='LC12'><span class="sd">	 * method). In your lang file, use the `$dictionary` key as namespace and its value as an array</span></div><div class='line' id='LC13'><span class="sd">	 * of context-aware translations, as shown below:</span></div><div class='line' id='LC14'><span class="sd">	 *</span></div><div class='line' id='LC15'><span class="sd">	 * $dictionary = array(</span></div><div class='line' id='LC16'><span class="sd">	 * 		[...]</span></div><div class='line' id='LC17'><span class="sd">	 *</span></div><div class='line' id='LC18'><span class="sd">	 * 		&#39;Create new&#39; =&gt; &#39;Translation for Create New&#39;,</span></div><div class='line' id='LC19'><span class="sd">	 *</span></div><div class='line' id='LC20'><span class="sd">	 * 		&#39;/blueprints/datasources&#39; =&gt; array(</span></div><div class='line' id='LC21'><span class="sd">	 * 			&#39;Create new&#39; =&gt;</span></div><div class='line' id='LC22'><span class="sd">	 * 			&#39;If we are inside a /blueprints/datasources/* page, this translation will be returned for the string&#39;</span></div><div class='line' id='LC23'><span class="sd">	 * 		),</span></div><div class='line' id='LC24'><span class="sd">	 *</span></div><div class='line' id='LC25'><span class="sd">	 * 		[...]</span></div><div class='line' id='LC26'><span class="sd">	 *  );</span></div><div class='line' id='LC27'><span class="sd">	 *</span></div><div class='line' id='LC28'><span class="sd">	 * @see core.Symphony#getPageNamespace()</span></div><div class='line' id='LC29'><span class="sd">	 * @param string $string</span></div><div class='line' id='LC30'><span class="sd">	 *  The string that should be translated</span></div><div class='line' id='LC31'><span class="sd">	 * @param array $inserts (optional)</span></div><div class='line' id='LC32'><span class="sd">	 *  Optional array used to replace translation placeholders, defaults to NULL</span></div><div class='line' id='LC33'><span class="sd">	 * @return</span></div><div class='line' id='LC34'><span class="sd">	 *  Returns the translated string</span></div><div class='line' id='LC35'><span class="sd">	 */</span></div><div class='line' id='LC36'>	<span class="k">function</span> <span class="nf">__</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$inserts</span><span class="o">=</span><span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC37'>		<span class="k">return</span> <span class="nx">Lang</span><span class="o">::</span><span class="na">translate</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$inserts</span><span class="p">);</span></div><div class='line' id='LC38'>	<span class="p">}</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>	<span class="sd">/**</span></div><div class='line' id='LC41'><span class="sd">	 * The Lang class loads and manages languages</span></div><div class='line' id='LC42'><span class="sd">	 */</span></div><div class='line' id='LC43'>	<span class="k">Class</span> <span class="nc">Lang</span> <span class="p">{</span></div><div class='line' id='LC44'><br/></div><div class='line' id='LC45'>		<span class="sd">/**</span></div><div class='line' id='LC46'><span class="sd">		 * Array of transliterations</span></div><div class='line' id='LC47'><span class="sd">		 * @var array</span></div><div class='line' id='LC48'><span class="sd">		 */</span></div><div class='line' id='LC49'>		<span class="k">private</span> <span class="k">static</span> <span class="nv">$_transliterations</span><span class="p">;</span></div><div class='line' id='LC50'><br/></div><div class='line' id='LC51'>		<span class="sd">/**</span></div><div class='line' id='LC52'><span class="sd">		 * Code of active language</span></div><div class='line' id='LC53'><span class="sd">		 * @var string</span></div><div class='line' id='LC54'><span class="sd">		 */</span></div><div class='line' id='LC55'>		<span class="k">private</span> <span class="k">static</span> <span class="nv">$_lang</span><span class="p">;</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>		<span class="sd">/**</span></div><div class='line' id='LC58'><span class="sd">		 * Context information of all available languages</span></div><div class='line' id='LC59'><span class="sd">		 * @var array</span></div><div class='line' id='LC60'><span class="sd">		 */</span></div><div class='line' id='LC61'>		<span class="k">private</span> <span class="k">static</span> <span class="nv">$_languages</span><span class="p">;</span></div><div class='line' id='LC62'><br/></div><div class='line' id='LC63'>		<span class="sd">/**</span></div><div class='line' id='LC64'><span class="sd">		 * Array of localized strings</span></div><div class='line' id='LC65'><span class="sd">		 * @var array</span></div><div class='line' id='LC66'><span class="sd">		 */</span></div><div class='line' id='LC67'>		<span class="k">private</span> <span class="k">static</span> <span class="nv">$_dictionary</span><span class="p">;</span></div><div class='line' id='LC68'><br/></div><div class='line' id='LC69'>		<span class="sd">/**</span></div><div class='line' id='LC70'><span class="sd">		 * Array of localized date and time strings</span></div><div class='line' id='LC71'><span class="sd">		 * @var array</span></div><div class='line' id='LC72'><span class="sd">		 */</span></div><div class='line' id='LC73'>		<span class="k">private</span> <span class="k">static</span> <span class="nv">$_datetime_dictionary</span><span class="p">;</span></div><div class='line' id='LC74'><br/></div><div class='line' id='LC75'>		<span class="sd">/**</span></div><div class='line' id='LC76'><span class="sd">		 * Get the current dictionary</span></div><div class='line' id='LC77'><span class="sd">		 *</span></div><div class='line' id='LC78'><span class="sd">		 * @return array</span></div><div class='line' id='LC79'><span class="sd">		 *  Return the dictionary</span></div><div class='line' id='LC80'><span class="sd">		 */</span></div><div class='line' id='LC81'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">Dictionary</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC82'>			<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">;</span></div><div class='line' id='LC83'>		<span class="p">}</span></div><div class='line' id='LC84'><br/></div><div class='line' id='LC85'>		<span class="sd">/**</span></div><div class='line' id='LC86'><span class="sd">		 * Get a list of either enabled or disabled languages. Example:</span></div><div class='line' id='LC87'><span class="sd">		 *</span></div><div class='line' id='LC88'><span class="sd">		 *  	array(</span></div><div class='line' id='LC89'><span class="sd">		 *  		[...]</span></div><div class='line' id='LC90'><span class="sd">		 *</span></div><div class='line' id='LC91'><span class="sd">		 *  		&#39;en&#39; =&gt; array(</span></div><div class='line' id='LC92'><span class="sd">		 *  			&#39;name&#39; =&gt; &#39;English&#39;,</span></div><div class='line' id='LC93'><span class="sd">		 *  			&#39;handle&#39; =&gt; &#39;english&#39;,</span></div><div class='line' id='LC94'><span class="sd">		 *  			&#39;extensions&#39; =&gt; array()</span></div><div class='line' id='LC95'><span class="sd">		 *  		),</span></div><div class='line' id='LC96'><span class="sd">		 *</span></div><div class='line' id='LC97'><span class="sd">		 *  		&#39;it&#39; =&gt; array(</span></div><div class='line' id='LC98'><span class="sd">		 *  			&#39;name&#39; =&gt; &#39;Italiano&#39;,</span></div><div class='line' id='LC99'><span class="sd">		 *  			&#39;handle&#39; =&gt; &#39;italian&#39;,</span></div><div class='line' id='LC100'><span class="sd">		 *  			&#39;extensions&#39; =&gt; array(</span></div><div class='line' id='LC101'><span class="sd">		 *  				[...]</span></div><div class='line' id='LC102'><span class="sd">		 *  			)</span></div><div class='line' id='LC103'><span class="sd">		 *  		),</span></div><div class='line' id='LC104'><span class="sd">		 *</span></div><div class='line' id='LC105'><span class="sd">		 *  		[...]</span></div><div class='line' id='LC106'><span class="sd">		 *  	)</span></div><div class='line' id='LC107'><span class="sd">		 *</span></div><div class='line' id='LC108'><span class="sd">		 * @see toolkit.Lang#createLanguage()</span></div><div class='line' id='LC109'><span class="sd">		 * @since Symphony 2.3</span></div><div class='line' id='LC110'><span class="sd">		 * @return array</span></div><div class='line' id='LC111'><span class="sd">		 *  Return an array of languages (both enabled and disabled)</span></div><div class='line' id='LC112'><span class="sd">		 */</span></div><div class='line' id='LC113'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">Languages</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC114'>			<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">;</span></div><div class='line' id='LC115'>		<span class="p">}</span></div><div class='line' id='LC116'><br/></div><div class='line' id='LC117'>		<span class="sd">/**</span></div><div class='line' id='LC118'><span class="sd">		 * Get transliterations</span></div><div class='line' id='LC119'><span class="sd">		 *</span></div><div class='line' id='LC120'><span class="sd">		 * @return array</span></div><div class='line' id='LC121'><span class="sd">		 *  Returns the transliterations array</span></div><div class='line' id='LC122'><span class="sd">		 */</span></div><div class='line' id='LC123'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">Transliterations</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC124'>			<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">;</span></div><div class='line' id='LC125'>		<span class="p">}</span></div><div class='line' id='LC126'><br/></div><div class='line' id='LC127'>		<span class="sd">/**</span></div><div class='line' id='LC128'><span class="sd">		 * Initialize transliterations, datetime dictionary and languages array.</span></div><div class='line' id='LC129'><span class="sd">		 */</span></div><div class='line' id='LC130'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">initialize</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC131'>			<span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC132'><br/></div><div class='line' id='LC133'>			<span class="c1">// Load default datetime strings</span></div><div class='line' id='LC134'>			<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_datetime_dictionary</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC135'>				<span class="k">include</span><span class="p">(</span><span class="nx">LANG</span> <span class="o">.</span> <span class="s1">&#39;/datetime.php&#39;</span><span class="p">);</span></div><div class='line' id='LC136'><br/></div><div class='line' id='LC137'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_datetime_dictionary</span> <span class="o">=</span> <span class="nv">$datetime_strings</span><span class="p">;</span></div><div class='line' id='LC138'>			<span class="p">}</span></div><div class='line' id='LC139'><br/></div><div class='line' id='LC140'>			<span class="c1">// Load default transliterations</span></div><div class='line' id='LC141'>			<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC142'>				<span class="k">include</span><span class="p">(</span><span class="nx">LANG</span> <span class="o">.</span> <span class="s1">&#39;/transliterations.php&#39;</span><span class="p">);</span></div><div class='line' id='LC143'><br/></div><div class='line' id='LC144'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span> <span class="o">=</span> <span class="nv">$transliterations</span><span class="p">;</span></div><div class='line' id='LC145'>			<span class="p">}</span></div><div class='line' id='LC146'><br/></div><div class='line' id='LC147'>			<span class="c1">// Load default English language</span></div><div class='line' id='LC148'>			<span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC149'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">createLanguage</span><span class="p">(</span><span class="s1">&#39;en&#39;</span><span class="p">,</span> <span class="s1">&#39;English&#39;</span><span class="p">,</span> <span class="s1">&#39;english&#39;</span><span class="p">);</span></div><div class='line' id='LC150'>			<span class="p">}</span></div><div class='line' id='LC151'><br/></div><div class='line' id='LC152'>			<span class="c1">// Fetch all available languages</span></div><div class='line' id='LC153'>			<span class="nx">self</span><span class="o">::</span><span class="na">fetch</span><span class="p">();</span></div><div class='line' id='LC154'>		<span class="p">}</span></div><div class='line' id='LC155'><br/></div><div class='line' id='LC156'>		<span class="sd">/**</span></div><div class='line' id='LC157'><span class="sd">		 * Create an array of Language information for internal use.</span></div><div class='line' id='LC158'><span class="sd">		 *</span></div><div class='line' id='LC159'><span class="sd">		 * @since Symphony 2.3</span></div><div class='line' id='LC160'><span class="sd">		 * @param string $code</span></div><div class='line' id='LC161'><span class="sd">		 *  Language code, e. g. &#39;en&#39; or &#39;pt-br&#39;</span></div><div class='line' id='LC162'><span class="sd">		 * @param string $name</span></div><div class='line' id='LC163'><span class="sd">		 *  Language name</span></div><div class='line' id='LC164'><span class="sd">		 * @param string $handle (optional)</span></div><div class='line' id='LC165'><span class="sd">		 *  Handle for the given language, used to build a valid &#39;lang_$handle&#39; extension&#39;s handle.</span></div><div class='line' id='LC166'><span class="sd">		 *  Defaults to null.</span></div><div class='line' id='LC167'><span class="sd">		 * @param array $extensions (optional)</span></div><div class='line' id='LC168'><span class="sd">		 *  An array of extensions that support the given language.</span></div><div class='line' id='LC169'><span class="sd">		 * @return array</span></div><div class='line' id='LC170'><span class="sd">		 *  An array of Language information.</span></div><div class='line' id='LC171'><span class="sd">		 */</span></div><div class='line' id='LC172'>		<span class="k">private</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">createLanguage</span><span class="p">(</span><span class="nv">$code</span><span class="p">,</span> <span class="nv">$name</span><span class="p">,</span> <span class="nv">$handle</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$extensions</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC173'>			<span class="k">return</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC174'>				<span class="nv">$code</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC175'>					<span class="s1">&#39;name&#39;</span> <span class="o">=&gt;</span> <span class="nv">$name</span><span class="p">,</span></div><div class='line' id='LC176'>					<span class="s1">&#39;handle&#39;</span> <span class="o">=&gt;</span> <span class="nv">$handle</span><span class="p">,</span></div><div class='line' id='LC177'>					<span class="s1">&#39;extensions&#39;</span> <span class="o">=&gt;</span> <span class="nv">$extensions</span></div><div class='line' id='LC178'>				<span class="p">)</span></div><div class='line' id='LC179'>			<span class="p">);</span></div><div class='line' id='LC180'>		<span class="p">}</span></div><div class='line' id='LC181'><br/></div><div class='line' id='LC182'>		<span class="sd">/**</span></div><div class='line' id='LC183'><span class="sd">		 * Fetch all languages available in the core language folder and the language extensions.</span></div><div class='line' id='LC184'><span class="sd">		 * The function stores all language information in the private variable `$_languages`.</span></div><div class='line' id='LC185'><span class="sd">		 * It contains an array with the name and handle of each language and an array of all</span></div><div class='line' id='LC186'><span class="sd">		 * extensions available in that language.</span></div><div class='line' id='LC187'><span class="sd">		 *</span></div><div class='line' id='LC188'><span class="sd">		 * @throws UnexpectedValueException</span></div><div class='line' id='LC189'><span class="sd">		 * @throws RuntimeException</span></div><div class='line' id='LC190'><span class="sd">		 */</span></div><div class='line' id='LC191'>		<span class="k">private</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">fetch</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC192'>			<span class="c1">// Fetch extensions</span></div><div class='line' id='LC193'>			<span class="nv">$extensions</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">DirectoryIterator</span><span class="p">(</span><span class="nx">EXTENSIONS</span><span class="p">);</span></div><div class='line' id='LC194'><br/></div><div class='line' id='LC195'>			<span class="c1">// Language extensions</span></div><div class='line' id='LC196'>			<span class="k">foreach</span><span class="p">(</span><span class="nv">$extensions</span> <span class="k">as</span> <span class="nv">$extension</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC197'>				<span class="k">if</span><span class="p">(</span><span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">isDot</span><span class="p">()</span> <span class="o">||</span> <span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">isFile</span><span class="p">())</span> <span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC198'><br/></div><div class='line' id='LC199'>				<span class="c1">// Core translations</span></div><div class='line' id='LC200'>				<span class="nv">$core_handle</span> <span class="o">=</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">getFilename</span><span class="p">(),</span> <span class="s1">&#39;lang_&#39;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">false</span><span class="p">)</span></div><div class='line' id='LC201'>					<span class="o">?</span> <span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39;lang_&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">getFilename</span><span class="p">())</span></div><div class='line' id='LC202'>					<span class="o">:</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC203'><br/></div><div class='line' id='LC204'>				<span class="c1">// Loop over the `/lang` directory of this `$extension` searching for language</span></div><div class='line' id='LC205'>				<span class="c1">// files. If `/lang` isn&#39;t a directory, `UnexpectedValueException` will be</span></div><div class='line' id='LC206'>				<span class="c1">// thrown.</span></div><div class='line' id='LC207'>				<span class="k">try</span> <span class="p">{</span></div><div class='line' id='LC208'>					<span class="nv">$path</span> <span class="o">=</span> <span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">getPathname</span><span class="p">()</span> <span class="o">.</span> <span class="s1">&#39;/lang&#39;</span><span class="p">;</span></div><div class='line' id='LC209'>					<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">is_dir</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC210'><br/></div><div class='line' id='LC211'>					<span class="nv">$directory</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">DirectoryIterator</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC212'>					<span class="k">foreach</span><span class="p">(</span><span class="nv">$directory</span> <span class="k">as</span> <span class="nv">$file</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC213'>						<span class="k">if</span> <span class="p">(</span><span class="nv">$file</span><span class="o">-&gt;</span><span class="na">isDot</span><span class="p">()</span> <span class="o">||</span> <span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/\.php$/&#39;</span><span class="p">,</span> <span class="nv">$file</span><span class="o">-&gt;</span><span class="na">getPathname</span><span class="p">()))</span> <span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC214'><br/></div><div class='line' id='LC215'>						<span class="k">include</span><span class="p">(</span><span class="nv">$file</span><span class="o">-&gt;</span><span class="na">getPathname</span><span class="p">());</span></div><div class='line' id='LC216'><br/></div><div class='line' id='LC217'>						<span class="c1">// Get language code</span></div><div class='line' id='LC218'>						<span class="nv">$code</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="nv">$file</span><span class="p">);</span></div><div class='line' id='LC219'>						<span class="nv">$code</span> <span class="o">=</span> <span class="nv">$code</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC220'>						<span class="nv">$lang</span> <span class="o">=</span> <span class="nb">isset</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">])</span> <span class="o">?</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">]</span> <span class="o">:</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC221'><br/></div><div class='line' id='LC222'>						<span class="c1">// Available extensions</span></div><div class='line' id='LC223'>						<span class="nv">$extensions</span> <span class="o">=</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$lang</span><span class="p">))</span> <span class="o">?</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;extensions&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC224'><br/></div><div class='line' id='LC225'>						<span class="c1">// Core translations</span></div><div class='line' id='LC226'>						<span class="k">if</span><span class="p">(</span><span class="nv">$core_handle</span><span class="p">){</span></div><div class='line' id='LC227'>							<span class="nv">$handle</span> <span class="o">=</span> <span class="nv">$core_handle</span><span class="p">;</span></div><div class='line' id='LC228'>						<span class="p">}</span></div><div class='line' id='LC229'>						<span class="c1">// Extension translations</span></div><div class='line' id='LC230'>						<span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC231'>							<span class="nv">$handle</span> <span class="o">=</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$lang</span><span class="p">))</span> <span class="o">?</span> <span class="nv">$lang</span><span class="p">[</span><span class="s1">&#39;handle&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC232'>							<span class="nv">$extensions</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$extension</span><span class="o">-&gt;</span><span class="na">getFilename</span><span class="p">()),</span> <span class="nv">$extensions</span><span class="p">);</span></div><div class='line' id='LC233'>						<span class="p">}</span></div><div class='line' id='LC234'><br/></div><div class='line' id='LC235'>						<span class="c1">// Merge languages ($about is declared inside the included $file)</span></div><div class='line' id='LC236'>						<span class="nv">$temp</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">createLanguage</span><span class="p">(</span><span class="nv">$code</span><span class="p">,</span> <span class="nv">$about</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">],</span> <span class="nv">$handle</span><span class="p">,</span> <span class="nv">$extensions</span><span class="p">);</span></div><div class='line' id='LC237'><br/></div><div class='line' id='LC238'>						<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$lang</span><span class="p">)){</span></div><div class='line' id='LC239'>							<span class="k">foreach</span><span class="p">(</span><span class="nv">$lang</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">){</span></div><div class='line' id='LC240'>								<span class="c1">// Prevent missing or nulled values overwriting existing values</span></div><div class='line' id='LC241'>								<span class="c1">// which can occur if a translation file is not correct.</span></div><div class='line' id='LC242'>								<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$temp</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="nv">$key</span><span class="p">])</span> <span class="o">||</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$temp</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="nv">$key</span><span class="p">]))</span> <span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC243'><br/></div><div class='line' id='LC244'>								<span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$temp</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="nv">$key</span><span class="p">];</span></div><div class='line' id='LC245'>							<span class="p">}</span></div><div class='line' id='LC246'>						<span class="p">}</span></div><div class='line' id='LC247'>						<span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC248'>							<span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$temp</span><span class="p">[</span><span class="nv">$code</span><span class="p">];</span></div><div class='line' id='LC249'>						<span class="p">}</span></div><div class='line' id='LC250'>					<span class="p">}</span></div><div class='line' id='LC251'>				<span class="p">}</span></div><div class='line' id='LC252'>				<span class="k">catch</span> <span class="p">(</span><span class="nx">Exception</span> <span class="nv">$ex</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC253'>					<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC254'>				<span class="p">}</span></div><div class='line' id='LC255'>			<span class="p">}</span></div><div class='line' id='LC256'>		<span class="p">}</span></div><div class='line' id='LC257'><br/></div><div class='line' id='LC258'>		<span class="sd">/**</span></div><div class='line' id='LC259'><span class="sd">		 * Set system language, load translations for core and extensions. If the specified language</span></div><div class='line' id='LC260'><span class="sd">		 * cannot be found, Symphony will default to English.</span></div><div class='line' id='LC261'><span class="sd">		 *</span></div><div class='line' id='LC262'><span class="sd">		 * Note: Beginning with Symphony 2.2 translations bundled with extensions will only be loaded</span></div><div class='line' id='LC263'><span class="sd">		 * when the core dictionary of the specific language is available.</span></div><div class='line' id='LC264'><span class="sd">		 *</span></div><div class='line' id='LC265'><span class="sd">		 * @param string $code</span></div><div class='line' id='LC266'><span class="sd">		 *  Language code, e. g. &#39;en&#39; or &#39;pt-br&#39;</span></div><div class='line' id='LC267'><span class="sd">		 * @param boolean $checkStatus (optional)</span></div><div class='line' id='LC268'><span class="sd">		 *  If false, set the language even if it&#39;s not enabled. Defaults to true.</span></div><div class='line' id='LC269'><span class="sd">		 */</span></div><div class='line' id='LC270'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">set</span><span class="p">(</span><span class="nv">$code</span><span class="p">,</span> <span class="nv">$checkStatus</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC271'>			<span class="k">if</span><span class="p">(</span><span class="o">!</span><span class="nv">$code</span> <span class="o">||</span> <span class="nv">$code</span> <span class="o">==</span> <span class="nx">self</span><span class="o">::</span><span class="na">get</span><span class="p">())</span> <span class="k">return</span><span class="p">;</span></div><div class='line' id='LC272'><br/></div><div class='line' id='LC273'>			<span class="c1">// Store current language code</span></div><div class='line' id='LC274'>			<span class="nx">self</span><span class="o">::</span><span class="nv">$_lang</span> <span class="o">=</span> <span class="nv">$code</span><span class="p">;</span></div><div class='line' id='LC275'><br/></div><div class='line' id='LC276'>			<span class="c1">// Clear dictionary</span></div><div class='line' id='LC277'>			<span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC278'><br/></div><div class='line' id='LC279'>			<span class="c1">// Language file available</span></div><div class='line' id='LC280'>			<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="s1">&#39;en&#39;</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">isLanguageEnabled</span><span class="p">(</span><span class="nv">$code</span><span class="p">)</span> <span class="o">||</span> <span class="nv">$checkStatus</span> <span class="o">==</span> <span class="k">false</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC281'>				<span class="c1">// Load core translations</span></div><div class='line' id='LC282'>				<span class="nx">self</span><span class="o">::</span><span class="na">load</span><span class="p">(</span><span class="nx">vsprintf</span><span class="p">(</span><span class="s1">&#39;%s/lang_%s/lang/lang.%s.php&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC283'>					<span class="nx">EXTENSIONS</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="s1">&#39;handle&#39;</span><span class="p">],</span> <span class="nv">$code</span></div><div class='line' id='LC284'>				<span class="p">)));</span></div><div class='line' id='LC285'><br/></div><div class='line' id='LC286'>				<span class="c1">// Load extension translations</span></div><div class='line' id='LC287'>				<span class="k">if</span><span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="s1">&#39;extensions&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC288'>					<span class="k">foreach</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="s1">&#39;extensions&#39;</span><span class="p">]</span> <span class="k">as</span> <span class="nv">$extension</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC289'>						<span class="nx">self</span><span class="o">::</span><span class="na">load</span><span class="p">(</span><span class="nx">vsprintf</span><span class="p">(</span><span class="s1">&#39;%s/%s/lang/lang.%s.php&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC290'>							<span class="nx">EXTENSIONS</span><span class="p">,</span> <span class="nv">$extension</span><span class="p">,</span> <span class="nv">$code</span></div><div class='line' id='LC291'>						<span class="p">)));</span></div><div class='line' id='LC292'>					<span class="p">}</span></div><div class='line' id='LC293'>				<span class="p">}</span></div><div class='line' id='LC294'>			<span class="p">}</span></div><div class='line' id='LC295'><br/></div><div class='line' id='LC296'>			<span class="c1">// Language file unavailable, use default language</span></div><div class='line' id='LC297'>			<span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC298'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_lang</span> <span class="o">=</span> <span class="s1">&#39;en&#39;</span><span class="p">;</span></div><div class='line' id='LC299'><br/></div><div class='line' id='LC300'>				<span class="k">include</span><span class="p">(</span><span class="nx">LANG</span> <span class="o">.</span> <span class="s1">&#39;/transliterations.php&#39;</span><span class="p">);</span></div><div class='line' id='LC301'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span> <span class="o">=</span> <span class="nv">$transliterations</span><span class="p">;</span></div><div class='line' id='LC302'><br/></div><div class='line' id='LC303'>				<span class="c1">// Log error, if possible</span></div><div class='line' id='LC304'>				<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">!=</span> <span class="s1">&#39;en&#39;</span> <span class="o">&amp;&amp;</span> <span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;Symphony&#39;</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nx">Symphony</span><span class="o">::</span><span class="na">Log</span><span class="p">()</span> <span class="nx">instanceof</span> <span class="nx">Log</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC305'>					<span class="nx">Symphony</span><span class="o">::</span><span class="na">Log</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">pushToLog</span><span class="p">(</span></div><div class='line' id='LC306'>						<span class="nx">__</span><span class="p">(</span><span class="s1">&#39;The selected language, %s, could not be found. Using default English dictionary instead.&#39;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$code</span><span class="p">)),</span></div><div class='line' id='LC307'>						<span class="k">E_ERROR</span><span class="p">,</span></div><div class='line' id='LC308'>						<span class="k">true</span></div><div class='line' id='LC309'>					<span class="p">);</span></div><div class='line' id='LC310'>				<span class="p">}</span></div><div class='line' id='LC311'>			<span class="p">}</span></div><div class='line' id='LC312'>		<span class="p">}</span></div><div class='line' id='LC313'><br/></div><div class='line' id='LC314'>		<span class="sd">/**</span></div><div class='line' id='LC315'><span class="sd">		 * Given a valid language code, this function checks if the language is enabled.</span></div><div class='line' id='LC316'><span class="sd">		 *</span></div><div class='line' id='LC317'><span class="sd">		 * @since Symphony 2.3</span></div><div class='line' id='LC318'><span class="sd">		 * @param string $code</span></div><div class='line' id='LC319'><span class="sd">		 *  Language code, e. g. &#39;en&#39; or &#39;pt-br&#39;</span></div><div class='line' id='LC320'><span class="sd">		 * @return boolean</span></div><div class='line' id='LC321'><span class="sd">		 *  If true, the language is enabled.</span></div><div class='line' id='LC322'><span class="sd">		 */</span></div><div class='line' id='LC323'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isLanguageEnabled</span><span class="p">(</span><span class="nv">$code</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC324'>			<span class="k">if</span><span class="p">(</span><span class="nv">$code</span> <span class="o">==</span> <span class="s1">&#39;en&#39;</span><span class="p">)</span> <span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC325'><br/></div><div class='line' id='LC326'>			<span class="nv">$handle</span> <span class="o">=</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">]))</span> <span class="o">?</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span><span class="p">[</span><span class="nv">$code</span><span class="p">][</span><span class="s1">&#39;handle&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC327'>			<span class="nv">$enabled_extensions</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC328'><br/></div><div class='line' id='LC329'>			<span class="c1">// Fetch list of active extensions</span></div><div class='line' id='LC330'>			<span class="k">if</span><span class="p">(</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;Symphony&#39;</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_null</span><span class="p">(</span><span class="nx">Symphony</span><span class="o">::</span><span class="na">ExtensionManager</span><span class="p">()))){</span></div><div class='line' id='LC331'>				<span class="nv">$enabled_extensions</span> <span class="o">=</span> <span class="nx">Symphony</span><span class="o">::</span><span class="na">ExtensionManager</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">listInstalledHandles</span><span class="p">();</span></div><div class='line' id='LC332'>			<span class="p">}</span></div><div class='line' id='LC333'><br/></div><div class='line' id='LC334'>			<span class="k">return</span> <span class="nb">in_array</span><span class="p">(</span><span class="s1">&#39;lang_&#39;</span> <span class="o">.</span> <span class="nv">$handle</span><span class="p">,</span> <span class="nv">$enabled_extensions</span><span class="p">);</span></div><div class='line' id='LC335'>		<span class="p">}</span></div><div class='line' id='LC336'><br/></div><div class='line' id='LC337'>		<span class="sd">/**</span></div><div class='line' id='LC338'><span class="sd">		 * Load language file. Each language file contains three arrays:</span></div><div class='line' id='LC339'><span class="sd">		 * about, dictionary and transliterations.</span></div><div class='line' id='LC340'><span class="sd">		 *</span></div><div class='line' id='LC341'><span class="sd">		 * @param string $path</span></div><div class='line' id='LC342'><span class="sd">		 *  Path of the language file that should be loaded</span></div><div class='line' id='LC343'><span class="sd">		 */</span></div><div class='line' id='LC344'>		<span class="k">private</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">load</span><span class="p">(</span><span class="nv">$path</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC345'>			<span class="c1">// Load language file</span></div><div class='line' id='LC346'>			<span class="k">if</span><span class="p">(</span><span class="nb">file_exists</span><span class="p">(</span><span class="nv">$path</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC347'>				<span class="k">require</span><span class="p">(</span><span class="nv">$path</span><span class="p">);</span></div><div class='line' id='LC348'>			<span class="p">}</span></div><div class='line' id='LC349'><br/></div><div class='line' id='LC350'>			<span class="c1">// Populate dictionary ($dictionary is declared inside $path)</span></div><div class='line' id='LC351'>			<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$dictionary</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">is_array</span><span class="p">(</span><span class="nv">$dictionary</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC352'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">,</span> <span class="nv">$dictionary</span><span class="p">);</span></div><div class='line' id='LC353'>			<span class="p">}</span></div><div class='line' id='LC354'><br/></div><div class='line' id='LC355'>			<span class="c1">// Populate transliterations ($transliterations is declared inside $path)</span></div><div class='line' id='LC356'>			<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$transliterations</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">is_array</span><span class="p">(</span><span class="nv">$transliterations</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC357'>				<span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">,</span> <span class="nv">$transliterations</span><span class="p">);</span></div><div class='line' id='LC358'>			<span class="p">}</span></div><div class='line' id='LC359'>		<span class="p">}</span></div><div class='line' id='LC360'><br/></div><div class='line' id='LC361'>		<span class="sd">/**</span></div><div class='line' id='LC362'><span class="sd">		 * Get current language</span></div><div class='line' id='LC363'><span class="sd">		 *</span></div><div class='line' id='LC364'><span class="sd">		 * @return string</span></div><div class='line' id='LC365'><span class="sd">		 */</span></div><div class='line' id='LC366'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">get</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC367'>			<span class="k">return</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_lang</span><span class="p">;</span></div><div class='line' id='LC368'>		<span class="p">}</span></div><div class='line' id='LC369'><br/></div><div class='line' id='LC370'>		<span class="sd">/**</span></div><div class='line' id='LC371'><span class="sd">		 * This function is an internal alias for `__()`.</span></div><div class='line' id='LC372'><span class="sd">		 *</span></div><div class='line' id='LC373'><span class="sd">		 * @since Symphony 2.3</span></div><div class='line' id='LC374'><span class="sd">		 * @see toolkit.__()</span></div><div class='line' id='LC375'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC376'><span class="sd">		 *  The string that should be translated</span></div><div class='line' id='LC377'><span class="sd">		 * @param array $inserts (optional)</span></div><div class='line' id='LC378'><span class="sd">		 *  Optional array used to replace translation placeholders, defaults to NULL</span></div><div class='line' id='LC379'><span class="sd">		 * @param string $namespace (optional)</span></div><div class='line' id='LC380'><span class="sd">		 *  Optional string used to define the namespace, defaults to NULL.</span></div><div class='line' id='LC381'><span class="sd">		 * @return string</span></div><div class='line' id='LC382'><span class="sd">		 *  Returns the translated string</span></div><div class='line' id='LC383'><span class="sd">		 */</span></div><div class='line' id='LC384'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">translate</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$inserts</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$namespace</span> <span class="o">=</span> <span class="k">null</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC385'>			<span class="k">if</span><span class="p">(</span><span class="nb">is_null</span><span class="p">(</span><span class="nv">$namespace</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;Symphony&#39;</span><span class="p">)){</span></div><div class='line' id='LC386'>				<span class="nv">$namespace</span> <span class="o">=</span> <span class="nx">Symphony</span><span class="o">::</span><span class="na">getPageNamespace</span><span class="p">();</span></div><div class='line' id='LC387'>			<span class="p">}</span></div><div class='line' id='LC388'><br/></div><div class='line' id='LC389'>			<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$namespace</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">[</span><span class="nv">$namespace</span><span class="p">][</span><span class="nv">$string</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC390'>				<span class="nv">$translated</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">[</span><span class="nv">$namespace</span><span class="p">][</span><span class="nv">$string</span><span class="p">];</span></div><div class='line' id='LC391'>			<span class="p">}</span></div><div class='line' id='LC392'>			<span class="k">else</span> <span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">[</span><span class="nv">$string</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC393'>				<span class="nv">$translated</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_dictionary</span><span class="p">[</span><span class="nv">$string</span><span class="p">];</span></div><div class='line' id='LC394'>			<span class="p">}</span></div><div class='line' id='LC395'>			<span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC396'>				<span class="nv">$translated</span> <span class="o">=</span> <span class="nv">$string</span><span class="p">;</span></div><div class='line' id='LC397'>			<span class="p">}</span></div><div class='line' id='LC398'><br/></div><div class='line' id='LC399'>			<span class="nv">$translated</span> <span class="o">=</span> <span class="k">empty</span><span class="p">(</span><span class="nv">$translated</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$string</span> <span class="o">:</span> <span class="nv">$translated</span><span class="p">;</span></div><div class='line' id='LC400'><br/></div><div class='line' id='LC401'>			<span class="c1">// Replace translation placeholders</span></div><div class='line' id='LC402'>			<span class="k">if</span><span class="p">(</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$inserts</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$inserts</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC403'>				<span class="nv">$translated</span> <span class="o">=</span> <span class="nx">vsprintf</span><span class="p">(</span><span class="nv">$translated</span><span class="p">,</span> <span class="nv">$inserts</span><span class="p">);</span></div><div class='line' id='LC404'>			<span class="p">}</span></div><div class='line' id='LC405'><br/></div><div class='line' id='LC406'>			<span class="k">return</span> <span class="nv">$translated</span><span class="p">;</span></div><div class='line' id='LC407'>		<span class="p">}</span></div><div class='line' id='LC408'><br/></div><div class='line' id='LC409'>		<span class="sd">/**</span></div><div class='line' id='LC410'><span class="sd">		 * Get an array of the codes and names of all languages that are available system wide.</span></div><div class='line' id='LC411'><span class="sd">		 *</span></div><div class='line' id='LC412'><span class="sd">		 * Note: Beginning with Symphony 2.2 language files are only available</span></div><div class='line' id='LC413'><span class="sd">		 * when the language extension is explicitly enabled.</span></div><div class='line' id='LC414'><span class="sd">		 *</span></div><div class='line' id='LC415'><span class="sd">		 * @param boolean $checkStatus (optional)</span></div><div class='line' id='LC416'><span class="sd">		 *  If false, retrieves a list a languages that support core translation.</span></div><div class='line' id='LC417'><span class="sd">		 * @return array</span></div><div class='line' id='LC418'><span class="sd">		 *  Returns an associative array of language codes and names, e. g. &#39;en&#39; =&gt; &#39;English&#39;</span></div><div class='line' id='LC419'><span class="sd">		 */</span></div><div class='line' id='LC420'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">getAvailableLanguages</span><span class="p">(</span><span class="nv">$checkStatus</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC421'>			<span class="nv">$languages</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC422'><br/></div><div class='line' id='LC423'>			<span class="c1">// Get available languages</span></div><div class='line' id='LC424'>			<span class="k">foreach</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_languages</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$language</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC425'>				<span class="k">if</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">isLanguageEnabled</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="o">||</span> <span class="p">(</span><span class="nv">$checkStatus</span> <span class="o">==</span> <span class="k">false</span> <span class="o">&amp;&amp;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$language</span><span class="p">[</span><span class="s1">&#39;handle&#39;</span><span class="p">]))){</span></div><div class='line' id='LC426'>					<span class="nv">$languages</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$language</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">];</span></div><div class='line' id='LC427'>				<span class="p">}</span></div><div class='line' id='LC428'>			<span class="p">}</span></div><div class='line' id='LC429'><br/></div><div class='line' id='LC430'>			<span class="c1">// Return languages codes</span></div><div class='line' id='LC431'>			<span class="k">return</span> <span class="nv">$languages</span><span class="p">;</span></div><div class='line' id='LC432'>		<span class="p">}</span></div><div class='line' id='LC433'><br/></div><div class='line' id='LC434'>		<span class="sd">/**</span></div><div class='line' id='LC435'><span class="sd">		 * Check if Symphony is localised.</span></div><div class='line' id='LC436'><span class="sd">		 *</span></div><div class='line' id='LC437'><span class="sd">		 * @return boolean</span></div><div class='line' id='LC438'><span class="sd">		 *  Returns true for localized system, false for English system</span></div><div class='line' id='LC439'><span class="sd">		 */</span></div><div class='line' id='LC440'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isLocalized</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC441'>			<span class="k">return</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">get</span><span class="p">()</span> <span class="o">!=</span> <span class="s1">&#39;en&#39;</span><span class="p">);</span></div><div class='line' id='LC442'>		<span class="p">}</span></div><div class='line' id='LC443'><br/></div><div class='line' id='LC444'>		<span class="sd">/**</span></div><div class='line' id='LC445'><span class="sd">		 * Localize dates.</span></div><div class='line' id='LC446'><span class="sd">		 *</span></div><div class='line' id='LC447'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC448'><span class="sd">		 *  Standard date that should be localized</span></div><div class='line' id='LC449'><span class="sd">		 * @return string</span></div><div class='line' id='LC450'><span class="sd">		 *  Return the given date with translated month and day names</span></div><div class='line' id='LC451'><span class="sd">		 */</span></div><div class='line' id='LC452'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">localizeDate</span><span class="p">(</span><span class="nv">$string</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC453'>			<span class="c1">// Only translate dates in localized environments</span></div><div class='line' id='LC454'>			<span class="k">if</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">isLocalized</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC455'>				<span class="k">foreach</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_datetime_dictionary</span> <span class="k">as</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC456'>					<span class="nv">$string</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/\b&#39;</span> <span class="o">.</span> <span class="nv">$value</span> <span class="o">.</span> <span class="s1">&#39;\b/i&#39;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">translate</span><span class="p">(</span><span class="nv">$value</span><span class="p">),</span> <span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC457'>				<span class="p">}</span></div><div class='line' id='LC458'>			<span class="p">}</span></div><div class='line' id='LC459'><br/></div><div class='line' id='LC460'>			<span class="k">return</span> <span class="nv">$string</span><span class="p">;</span></div><div class='line' id='LC461'>		<span class="p">}</span></div><div class='line' id='LC462'><br/></div><div class='line' id='LC463'>		<span class="sd">/**</span></div><div class='line' id='LC464'><span class="sd">		 * Standardize dates.</span></div><div class='line' id='LC465'><span class="sd">		 *</span></div><div class='line' id='LC466'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC467'><span class="sd">		 *  Localized date that should be standardized</span></div><div class='line' id='LC468'><span class="sd">		 * @return string</span></div><div class='line' id='LC469'><span class="sd">		 *  Returns the given date with English month and day names</span></div><div class='line' id='LC470'><span class="sd">		 */</span></div><div class='line' id='LC471'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">standardizeDate</span><span class="p">(</span><span class="nv">$string</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC472'>			<span class="c1">// Only standardize dates in localized environments</span></div><div class='line' id='LC473'>			<span class="k">if</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">isLocalized</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC474'><br/></div><div class='line' id='LC475'>				<span class="c1">// Translate names to English</span></div><div class='line' id='LC476'>				<span class="k">foreach</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_datetime_dictionary</span> <span class="k">as</span> <span class="nv">$values</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC477'>					<span class="nv">$string</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/\b&#39;</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">translate</span><span class="p">(</span><span class="nv">$values</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;\b/i&#39;</span> <span class="o">.</span> <span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">isUnicodeCompiled</span><span class="p">()</span> <span class="o">==</span> <span class="k">true</span> <span class="o">?</span> <span class="s1">&#39;u&#39;</span> <span class="o">:</span> <span class="k">null</span><span class="p">),</span> <span class="nv">$values</span><span class="p">,</span> <span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC478'>				<span class="p">}</span></div><div class='line' id='LC479'><br/></div><div class='line' id='LC480'>				<span class="c1">// Replace custom date and time separator with space:</span></div><div class='line' id='LC481'>				<span class="c1">// This is important, otherwise the `DateTime` constructor may break</span></div><div class='line' id='LC482'>				<span class="c1">// @todo Test if this separator is still required. It&#39;s a hidden setting</span></div><div class='line' id='LC483'>				<span class="c1">// and users are only aware of it if they go digging/pointed in the right direction</span></div><div class='line' id='LC484'>				<span class="nv">$separator</span> <span class="o">=</span> <span class="nx">Symphony</span><span class="o">::</span><span class="na">Configuration</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">get</span><span class="p">(</span><span class="s1">&#39;datetime_separator&#39;</span><span class="p">,</span> <span class="s1">&#39;region&#39;</span><span class="p">);</span></div><div class='line' id='LC485'>				<span class="k">if</span><span class="p">(</span><span class="nv">$separator</span> <span class="o">!=</span> <span class="s1">&#39; &#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC486'>					<span class="nv">$string</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$separator</span><span class="p">,</span> <span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC487'>				<span class="p">}</span></div><div class='line' id='LC488'>			<span class="p">}</span></div><div class='line' id='LC489'><br/></div><div class='line' id='LC490'>			<span class="k">return</span> <span class="nv">$string</span><span class="p">;</span></div><div class='line' id='LC491'>		<span class="p">}</span></div><div class='line' id='LC492'><br/></div><div class='line' id='LC493'>		<span class="sd">/**</span></div><div class='line' id='LC494'><span class="sd">		 * Given a string, this will clean it for use as a Symphony handle. Preserves multi-byte characters.</span></div><div class='line' id='LC495'><span class="sd">		 *</span></div><div class='line' id='LC496'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC497'><span class="sd">		 *  String to be cleaned up</span></div><div class='line' id='LC498'><span class="sd">		 * @param int $max_length</span></div><div class='line' id='LC499'><span class="sd">		 *  The maximum number of characters in the handle</span></div><div class='line' id='LC500'><span class="sd">		 * @param string $delim</span></div><div class='line' id='LC501'><span class="sd">		 *  All non-valid characters will be replaced with this</span></div><div class='line' id='LC502'><span class="sd">		 * @param boolean $uriencode</span></div><div class='line' id='LC503'><span class="sd">		 *  Force the resultant string to be uri encoded making it safe for URLs</span></div><div class='line' id='LC504'><span class="sd">		 * @param boolean $apply_transliteration</span></div><div class='line' id='LC505'><span class="sd">		 *  If true, this will run the string through an array of substitution characters</span></div><div class='line' id='LC506'><span class="sd">		 * @param array $additional_rule_set</span></div><div class='line' id='LC507'><span class="sd">		 *  An array of REGEX patterns that should be applied to the `$string`. This</span></div><div class='line' id='LC508'><span class="sd">		 *  occurs after the string has been trimmed and joined with the `$delim`</span></div><div class='line' id='LC509'><span class="sd">		 * @return string</span></div><div class='line' id='LC510'><span class="sd">		 *  Returns resultant handle</span></div><div class='line' id='LC511'><span class="sd">		 */</span></div><div class='line' id='LC512'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">createHandle</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$max_length</span> <span class="o">=</span> <span class="mi">255</span><span class="p">,</span> <span class="nv">$delim</span> <span class="o">=</span> <span class="s1">&#39;-&#39;</span><span class="p">,</span> <span class="nv">$uriencode</span> <span class="o">=</span> <span class="k">false</span><span class="p">,</span> <span class="nv">$apply_transliteration</span> <span class="o">=</span> <span class="k">true</span><span class="p">,</span> <span class="nv">$additional_rule_set</span> <span class="o">=</span> <span class="k">NULL</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC513'>			<span class="c1">// Use the transliteration table if provided</span></div><div class='line' id='LC514'>			<span class="k">if</span><span class="p">(</span><span class="nv">$apply_transliteration</span> <span class="o">==</span> <span class="k">true</span><span class="p">){</span></div><div class='line' id='LC515'>				<span class="nv">$string</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">applyTransliterations</span><span class="p">(</span><span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC516'>			<span class="p">}</span></div><div class='line' id='LC517'><br/></div><div class='line' id='LC518'>			<span class="k">return</span> <span class="nx">General</span><span class="o">::</span><span class="na">createHandle</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$max_length</span><span class="p">,</span> <span class="nv">$delim</span><span class="p">,</span> <span class="nv">$uriencode</span><span class="p">,</span> <span class="nv">$additional_rule_set</span><span class="p">);</span></div><div class='line' id='LC519'>		<span class="p">}</span></div><div class='line' id='LC520'><br/></div><div class='line' id='LC521'>		<span class="sd">/**</span></div><div class='line' id='LC522'><span class="sd">		 * Given a string, this will clean it for use as a filename. Preserves multi-byte characters.</span></div><div class='line' id='LC523'><span class="sd">		 *</span></div><div class='line' id='LC524'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC525'><span class="sd">		 *  String to be cleaned up</span></div><div class='line' id='LC526'><span class="sd">		 * @param string $delim</span></div><div class='line' id='LC527'><span class="sd">		 *  Replacement for invalid characters</span></div><div class='line' id='LC528'><span class="sd">		 * @param boolean $apply_transliteration</span></div><div class='line' id='LC529'><span class="sd">		 *  If true, umlauts and special characters will be substituted</span></div><div class='line' id='LC530'><span class="sd">		 * @return string</span></div><div class='line' id='LC531'><span class="sd">		 *  Returns created filename</span></div><div class='line' id='LC532'><span class="sd">		 */</span></div><div class='line' id='LC533'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">createFilename</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$delim</span><span class="o">=</span><span class="s1">&#39;-&#39;</span><span class="p">,</span> <span class="nv">$apply_transliteration</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC534'>			<span class="c1">// Use the transliteration table if provided</span></div><div class='line' id='LC535'>			<span class="k">if</span><span class="p">(</span><span class="nv">$apply_transliteration</span> <span class="o">==</span> <span class="k">true</span><span class="p">){</span></div><div class='line' id='LC536'>				<span class="nv">$string</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">applyTransliterations</span><span class="p">(</span><span class="nv">$string</span><span class="p">);</span></div><div class='line' id='LC537'>			<span class="p">}</span></div><div class='line' id='LC538'><br/></div><div class='line' id='LC539'>			<span class="k">return</span> <span class="nx">General</span><span class="o">::</span><span class="na">createFilename</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nv">$delim</span><span class="p">);</span></div><div class='line' id='LC540'>		<span class="p">}</span></div><div class='line' id='LC541'><br/></div><div class='line' id='LC542'>		<span class="sd">/**</span></div><div class='line' id='LC543'><span class="sd">		 * This function replaces special characters according to the values stored inside</span></div><div class='line' id='LC544'><span class="sd">		 * `$_transliterations`.</span></div><div class='line' id='LC545'><span class="sd">		 *</span></div><div class='line' id='LC546'><span class="sd">		 * @since Symphony 2.3</span></div><div class='line' id='LC547'><span class="sd">		 * @param string $string</span></div><div class='line' id='LC548'><span class="sd">		 *  The string that should be cleaned-up</span></div><div class='line' id='LC549'><span class="sd">		 * @return</span></div><div class='line' id='LC550'><span class="sd">		 *  Returns the transliterated string</span></div><div class='line' id='LC551'><span class="sd">		 */</span></div><div class='line' id='LC552'>		<span class="k">private</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">applyTransliterations</span><span class="p">(</span><span class="nv">$string</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC553'>			<span class="c1">// Apply the straight transliterations with strtr as it&#39;s much faster</span></div><div class='line' id='LC554'>			<span class="nv">$string</span> <span class="o">=</span> <span class="nx">strtr</span><span class="p">(</span><span class="nv">$string</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">[</span><span class="s1">&#39;straight&#39;</span><span class="p">]);</span></div><div class='line' id='LC555'><br/></div><div class='line' id='LC556'>			<span class="c1">// Apply the regex rules over the resulting $string</span></div><div class='line' id='LC557'>			<span class="k">return</span> <span class="nb">preg_replace</span><span class="p">(</span></div><div class='line' id='LC558'>				<span class="nb">array_keys</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">[</span><span class="s1">&#39;regexp&#39;</span><span class="p">]),</span></div><div class='line' id='LC559'>				<span class="nb">array_values</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="nv">$_transliterations</span><span class="p">[</span><span class="s1">&#39;regexp&#39;</span><span class="p">]),</span></div><div class='line' id='LC560'>				<span class="nv">$string</span></div><div class='line' id='LC561'>			<span class="p">);</span></div><div class='line' id='LC562'>		<span class="p">}</span></div><div class='line' id='LC563'><br/></div><div class='line' id='LC564'>		<span class="sd">/**</span></div><div class='line' id='LC565'><span class="sd">		 * Returns boolean if PHP has been compiled with unicode support. This is</span></div><div class='line' id='LC566'><span class="sd">		 * useful to determine if unicode modifier&#39;s can be used in regular expression&#39;s</span></div><div class='line' id='LC567'><span class="sd">		 *</span></div><div class='line' id='LC568'><span class="sd">		 * @link http://stackoverflow.com/questions/4509576/detect-if-pcre-was-built-without-the-enable-unicode-properties-or-enable-utf8</span></div><div class='line' id='LC569'><span class="sd">		 * @since Symphony 2.2.2</span></div><div class='line' id='LC570'><span class="sd">		 * @return boolean</span></div><div class='line' id='LC571'><span class="sd">		 */</span></div><div class='line' id='LC572'>		<span class="k">public</span> <span class="k">static</span> <span class="k">function</span> <span class="nf">isUnicodeCompiled</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC573'>			<span class="k">return</span> <span class="p">(</span><span class="o">@</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/\pL/u&#39;</span><span class="p">,</span> <span class="s1">&#39;a&#39;</span><span class="p">)</span> <span class="o">==</span> <span class="mi">1</span> <span class="o">?</span> <span class="k">true</span> <span class="o">:</span> <span class="k">false</span><span class="p">);</span></div><div class='line' id='LC574'>		<span class="p">}</span></div><div class='line' id='LC575'><br/></div><div class='line' id='LC576'>	<span class="p">}</span></div><div class='line' id='LC577'><br/></div><div class='line' id='LC578'>	<span class="sd">/**</span></div><div class='line' id='LC579'><span class="sd">	 * Status when a language is installed and enabled (will be removed in Symphony 2.4)</span></div><div class='line' id='LC580'><span class="sd">	 * @deprecated</span></div><div class='line' id='LC581'><span class="sd">	 * @var integer</span></div><div class='line' id='LC582'><span class="sd">	 */</span></div><div class='line' id='LC583'>	<span class="nx">define_safe</span><span class="p">(</span><span class="s1">&#39;LANGUAGE_ENABLED&#39;</span><span class="p">,</span> <span class="mi">10</span><span class="p">);</span></div><div class='line' id='LC584'><br/></div><div class='line' id='LC585'>	<span class="sd">/**</span></div><div class='line' id='LC586'><span class="sd">	 * Status when a language is disabled (will be removed in Symphony 2.4)</span></div><div class='line' id='LC587'><span class="sd">	 * @deprecated</span></div><div class='line' id='LC588'><span class="sd">	 * @var integer</span></div><div class='line' id='LC589'><span class="sd">	 */</span></div><div class='line' id='LC590'>	<span class="nx">define_safe</span><span class="p">(</span><span class="s1">&#39;LANGUAGE_DISABLED&#39;</span><span class="p">,</span> <span class="mi">11</span><span class="p">);</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2013 <span title="0.07267s from fe4.rs.github.com">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/symphonycms/symphony-2/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

    
  </body>
</html>

