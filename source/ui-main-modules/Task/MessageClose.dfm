object fmEdit: TForm
  Left = 10
  Top = 10
  HelpType = htKeyword
  HelpKeyword = 
    'AAAAAhQCEQVDTEFTUxEFVEZvcm0RBlBBUkFNUxQGEQhhdmlzaWJsZQURAXgGChEB' +
    'eQYKEQF3CAF4EQFoBnARDmRvdWJsZWJ1ZmZlcmVkBA=='
  BorderIcons = []
  BorderStyle = bsNone
  Caption = 'Do you really want to complete'#13#10'process?  '
  ClientHeight = 512
  ClientWidth = 464
  Color = 3552822
  Ctl3D = False
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PopupMenu = fmMain.editorPopup
  Position = poDesigned
  Visible = False
  PixelsPerInch = 96
  TextHeight = 13
  object shape1: TShape
    Left = 68
    Top = 368
    Width = 328
    Height = 96
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVFNoYXBlEQZQQVJBTVMUCREIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQGIAAAAAAAARAWgMQFoAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBfR4wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFOL5AODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQfU' +
      '6OPz8OAxEQpicnVzaGNvbG9yCgDw8PARCHBlbmNvbG9yCgDf398RAXgRAzc4OA=='
    Brush.Color = 15790320
    Pen.Color = 14671839
  end
  object label1: TLabel
    Left = 76
    Top = 376
    Width = 191
    Height = 21
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKB8CbOBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFXPVAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERCWZvbnRjb2xvcgoA/4AAEQF4EQM4MDQ='
    Caption = 'sadUI ask u about smth ...?'
    Color = clBlack
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clRed
    Font.Height = -16
    Font.Name = 'Segoe UI Semibold'
    Font.Style = [fsBold]
    ParentColor = False
    ParentFont = False
  end
  object label2: TLabel
    Left = 76
    Top = 400
    Width = 213
    Height = 15
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUBxEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBfR4wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFOL5AODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jIRAXgRAzgwNA=='
    Caption = 'This process will be killed. You are sure?  '
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clBlack
    Font.Height = -12
    Font.Name = 'Segoe UI'
    Font.Style = []
    ParentFont = False
  end
  object label3: TLabel
    Left = 76
    Top = 432
    Width = 200
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcGVFBhbmVsFAUR' +
      'CmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzABEIACoAX2ZvbnQAEQRzZWxm' +
      'CgZSRtARCAAqAHByb3BzFAARBHRleHQRBtLl6vHyMREBeBEDODA0EQF5BhA='
    Alignment = taCenter
    AutoSize = False
    Caption = 'Kill this process anyway'
    Color = 3552822
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clWhite
    Font.Height = -13
    Font.Name = 'Segoe UI'
    Font.Style = []
    ParentColor = False
    ParentFont = False
    Transparent = False
    Layout = tlCenter
  end
  object label4: TLabel
    Left = 284
    Top = 432
    Width = 104
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcGVFBhbmVsFAUR' +
      'CmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzABEIACoAX2ZvbnQAEQRzZWxm' +
      'CgZSRtARCAAqAHByb3BzFAARBHRleHQRBtLl6vHyMREBeBEEMTAxMhEBeQZ4'
    Alignment = taCenter
    AutoSize = False
    Caption = 'Cancel'
    Color = 3552822
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clWhite
    Font.Height = -13
    Font.Name = 'Segoe UI'
    Font.Style = []
    ParentColor = False
    ParentFont = False
    Transparent = False
    Layout = tlCenter
  end
end
