object fmEdit: TForm
  Left = 10
  Top = 10
  HelpType = htKeyword
  HelpKeyword = 
    'AAAAAhQCEQVDTEFTUxEFVEZvcm0RBlBBUkFNUxQGEQhhdmlzaWJsZQURAXgGChEB' +
    'eQYKEQFoCAFQEQF3CAHYEQ5kb3VibGVidWZmZXJlZAU='
  AlphaBlend = True
  AlphaBlendValue = 250
  BorderIcons = []
  BorderStyle = bsNone
  Caption = 'Console'
  ClientHeight = 336
  ClientWidth = 472
  Color = 8026746
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PopupMenu = fmMain.editorPopup
  Position = poDesigned
  Visible = False
  DesignSize = (
    472
    336)
  PixelsPerInch = 96
  TextHeight = 13
  object BAR: TMImage
    Left = 0
    Top = 0
    Width = 472
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVE1JbWFnZREGUEFSQU1TFAgRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQFEQF3DEBiAAAAAAAAEQFoDEBaAAAAAAAAEQZwYXJlbnQXBVRGb3JtFAYR' +
      'CmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRz' +
      'FAMOCQ4LEQRzZWxmCgkVxcARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9u' +
      'dAAODAoCSLyADg0UAQ4DBREEdGV4dBEMyOfu4fDg5uXt6OUxEQF4BggRAXkGCA=='
    Align = alTop
    Mosaic = True
    Picture.Data = {
      0A54504E474F626A65637489504E470D0A1A0A0000000D494844520000001800
      00001808040000004A7EF57300000124694343504943432070726F66696C6500
      0028919D903D4AC4501485BF8CA2837F8D622116016D076C9CCAC61F0C160363
      2682D12A936470308921C930B80377A28B994210DC803B50B0F6BC6861611A1F
      DC9C8FCBBDE7BC1768D9499896F37B906655E1B887FEA57F652FBED16699357D
      7782B0CC7B83538FC6F3F98A65F4A563BC9AE7FE3C0B515C86D2992A0BF3A202
      EB40DC9D56B961151BB79E7B2C7E10DB519A45E227F16E944686CDAE9B2693F0
      C7D3DC6625CE2E06A6AFDAC6E18C1E7D6C864C189350D19166EA9CD0655FEA50
      10704F49284D88D59B6AA6E24654CAC9E148E489749B86BCAD3AAFAF94A13CC6
      F2320977A4F2347998FFFBBDF6715E6F5A9BB33C2882BA35A76A8D46F0FE08AB
      3EAC3FC3D2754356FBF7DB1A66BAF5CC3FDFF805D635505C270B1931000000E4
      4944415478DA9554D10AC2300CCCF9B2074104411004F14104411004410441D0
      9FBF9FAAEBDAAE69DC640D8476696E49EEBAE143883727E8DCEF82A53DE27388
      E34DA930085E130188D5F064DA3A75A05372DC37870753B788FE9BAC61B8D38E
      968775CA436C26B8312595E6FABAA2D6B6C29565CAFFC15BBF54D1DA02CE1580
      6E9A53AD7047E6FE2C89C59B930E07BA81A3AC44A2A3E7694F4D9F14E249A148
      6C6947516F1D53A34B0DEB9643291680DCE466324BB1A97515A0ADB59AFC3DC4
      75C9E163370658D08DA667EE3215981BE1ECEF00863734B4D7C22AA018F2D1A6
      F27A7F0191EE5CA5D794D2710000000049454E44AE426082}
    ExplicitTop = 8
  end
  object LABEL: TLabel
    Left = 0
    Top = 0
    Width = 472
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKCRXFwBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgJIvIAODRQBDgMFEQR0ZXh0EQfS5erx8jEwEQF4BggRAXkGCA=='
    Alignment = taCenter
    AutoSize = False
    Caption = 'Console'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clWhite
    Font.Height = -15
    Font.Name = 'Segoe UI Semilight'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object log: TMemo
    Left = 0
    Top = 24
    Width = 472
    Height = 330
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEFVE1lbW8RBlBBUkFNUxQHEQhhdmlzaWJsZQURCGFlbmFi' +
      'bGVkBREBdwxAYgAAAAAAABEBaBEDMzIyEQZwYXJlbnQXBVRGb3JtFAYRCmNsYXNz' +
      'X25hbWUOCREPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRzFAMOCg4M' +
      'EQRzZWxmCgbFA6ARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9udAAODQoB' +
      'ZryADg4UAg4DBREKcG9zaXRpb25leBEKcG9EZXNpZ25lZBEEdGV4dA0RAXkRAjMy'
    TabStop = False
    Alignment = taLeftJustify
    Anchors = [akLeft, akTop, akRight, akBottom]
    Color = 3552822
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWhite
    Font.Height = -11
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    ReadOnly = True
    ScrollBars = ssBoth
    TabOrder = 0
    WantTabs = True
    TabOnEnter = False
  end
  object l: __TNoVisual
    Left = 120
    Top = 136
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEJVEZ1bmN0aW9uEQZQQVJBTVMUCxEIYXZpc2libGUFEQhz' +
      'aG93aGludAQRCHByaW9yaXR5BgARCnRvcmVnaXN0ZXIFEQZwYXJlbnQXBVRGb3Jt' +
      'FAYRCmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFp' +
      'bnRzFAMOCQ4LEQRzZWxmCgbFA6ARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBf' +
      'Zm9udAAODAoBZryADg0UAg4DBREKcG9zaXRpb25leBEKcG9EZXNpZ25lZBEEdGV4' +
      'dA0RC29ubW91c2Vkb3duERZteURlc2lnbjo6b2JqTW91c2VEb3duEQpwYXJhbWV0' +
      'ZXJzEQUkdGV4dBEGaXNzeW5jBREFbGFiZWwNEQNvYmoN'
    realWidth = 25
    realHeight = 25
  end
  object move: __TNoVisual
    Left = 368
    Top = 56
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVEZ1bmNUaW1lchEGUEFSQU1TFA4RCGF2aXNpYmxlBREI' +
      'c2hvd2hpbnQEEQpiYWNrZ3JvdW5kBgARCHByaW9yaXR5BgARCGludGVydmFsEQEx' +
      'EQZlbmFibGUEEQZwYXJlbnQXBVRGb3JtFAYRCmNsYXNzX25hbWUOCxEPACoAX2Nv' +
      'bnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRzFAMODA4OEQRzZWxmCgsLLsgRCAAq' +
      'AHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9udBcFVEZvbnQUAw4PCgIppHAOEBQA' +
      'EQ0AKgBjbGFzc19uYW1lEQdfT2JqZWN0Dg8KAimkcA4QFAIOAwURCnBvc2l0aW9u' +
      'ZXgRCnBvRGVzaWduZWQRBHRleHQNEQtvbm1vdXNlZG93bhEWbXlEZXNpZ246Om9i' +
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAFwEQF5Bjg='
    realWidth = 25
    realHeight = 25
  end
  object moveHide: __TNoVisual
    Left = 400
    Top = 120
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVEZ1bmNUaW1lchEGUEFSQU1TFA4RCGF2aXNpYmxlBREI' +
      'c2hvd2hpbnQEEQpiYWNrZ3JvdW5kBgARCHByaW9yaXR5BgARCGludGVydmFsEQEx' +
      'EQZlbmFibGUEEQZwYXJlbnQXBVRGb3JtFAYRCmNsYXNzX25hbWUOCxEPACoAX2Nv' +
      'bnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRzFAMODA4OEQRzZWxmCgsLLsgRCAAq' +
      'AHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9udBcFVEZvbnQUAw4PCgIppHAOEBQA' +
      'EQ0AKgBjbGFzc19uYW1lEQdfT2JqZWN0Dg8KAimkcA4QFAIOAwURCnBvc2l0aW9u' +
      'ZXgRCnBvRGVzaWduZWQRBHRleHQNEQtvbm1vdXNlZG93bhEWbXlEZXNpZ246Om9i' +
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAGQEQF5Bng='
    realWidth = 25
    realHeight = 25
  end
  object moveShow: __TNoVisual
    Left = 344
    Top = 120
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVEZ1bmNUaW1lchEGUEFSQU1TFA4RCGF2aXNpYmxlBREI' +
      'c2hvd2hpbnQEEQpiYWNrZ3JvdW5kBgARCHByaW9yaXR5BgARCGludGVydmFsEQEx' +
      'EQZlbmFibGUEEQZwYXJlbnQXBVRGb3JtFAYRCmNsYXNzX25hbWUOCxEPACoAX2Nv' +
      'bnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRzFAMODA4OEQRzZWxmCgsLLsgRCAAq' +
      'AHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9udBcFVEZvbnQUAw4PCgIppHAOEBQA' +
      'EQ0AKgBjbGFzc19uYW1lEQdfT2JqZWN0Dg8KAimkcA4QFAIOAwURCnBvc2l0aW9u' +
      'ZXgRCnBvRGVzaWduZWQRBHRleHQNEQtvbm1vdXNlZG93bhEWbXlEZXNpZ246Om9i' +
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAFYEQF5Bng='
    realWidth = 25
    realHeight = 25
  end
end
