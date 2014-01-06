/*
 * menu.c
 *
 *  Created on: Jan 3, 2014
 *      Author: zuoyan
 */


#include <wiringPi.h>
#include <stdio.h>
#include <stdlib.h>
#include "PCD8544.h"

// pin setup
int _din = 3;
int _sclk = 5;
int _dc = 2;
int _rst = 0;
int _cs = 1;

// lcd contrast
int contrast = 50;

int main(int argc, char* argv[])
{
  // print infos
  printf("Raspberry Pi PCD8544 test\n");
  printf("========================================\n");

  printf("CLK on Port %i \n", _sclk);
  printf("DIN on Port %i \n", _din);
  printf("DC on Port %i \n", _dc);
  printf("CS on Port %i \n", _cs);
  printf("RST on Port %i \n", _rst);
  printf("========================================\n");

  // check wiringPi setup
  if (wiringPiSetup() == -1)
  {
    printf("wiringPi-Error\n");
    exit(1);
  }

  // init and clear lcd
  LCDInit(_sclk, _din, _dc, _cs, _rst, contrast);
  LCDclear();

  // turn all the pixels on (a handy test)
  printf("Test: All pixels on.\n");
  LCDcommand(PCD8544_DISPLAYCONTROL | PCD8544_DISPLAYALLON);
  delay(1000);
  // back to normal
  printf("Test: All pixels off.\n");
  LCDcommand(PCD8544_DISPLAYCONTROL | PCD8544_DISPLAYNORMAL);
  LCDclear();

  // display logo
  printf("Test: Display logo.\n");
  LCDshowLogo();
  delay(2000);
  LCDclear();
