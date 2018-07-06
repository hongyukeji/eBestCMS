@echo off

rem -------------------------------------------------------------
rem  HongYuKeJi command line bootstrap script for Windows.
rem
rem  @author HongYuKeJi <admin@hongyuvip.com>
rem  @link http://www.hongyuvip.com/
rem  @copyright Copyright (c) 2018 HongYu Software LLC
rem  @license http://www.hongyuvip.com/
rem -------------------------------------------------------------

rem -------------------------------------------------------------
rem       __________                 __   _________     _____    _________
rem   ____\______   \ ____   _______/  |_ \_   ___ \   /     \  /   _____/
rem _/ __ \|    |  _// __ \ /  ___/\   __\/    \  \/  /  \ /  \ \_____  \
rem \  ___/|    |   \  ___/ \___ \  |  |  \     \____/    Y    \/        \
rem  \___  >______  /\___  >____  > |__|   \______  /\____|__  /_______  /
rem      \/       \/     \/     \/                \/         \/        \/
rem -------------------------------------------------------------

@setlocal

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "artisan" %*

@endlocal