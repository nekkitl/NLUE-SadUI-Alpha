object fmEdit: TForm
  Left = 10
  Top = 10
  HelpType = htKeyword
  HelpKeyword = 
    'AAAAAhQCEQVDTEFTUxEFVEZvcm0RBlBBUkFNUxQGEQhhdmlzaWJsZQURAXgGChEB' +
    'eQYKEQF3CAL4EQFoCAFIEQ5kb3VibGVidWZmZXJlZAU='
  AlphaBlend = True
  AlphaBlendValue = 250
  BorderIcons = []
  BorderStyle = bsNone
  Caption = #1047#1072#1075#1088#1091#1079#1082#1080
  ClientHeight = 328
  ClientWidth = 760
  Color = clWhite
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'Tahoma'
  Font.Style = []
  OldCreateOrder = False
  PopupMenu = fmMain.editorPopup
  Position = poDesigned
  ScreenSnap = True
  Visible = False
  DesignSize = (
    760
    328)
  PixelsPerInch = 96
  TextHeight = 13
  object label1: TLabel
    Left = 540
    Top = 98
    Width = 22
    Height = 20
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgRAjIwEQZwYXJlbnQXBVRGb3JtFAYRCmNsYXNz' +
      'X25hbWUOCREPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRzFAMOCg4M' +
      'EQRzZWxmCga9/MARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9udAAODQoB' +
      'XrIwDg4UAg4DBREKcG9zaXRpb25leBEKcG9EZXNpZ25lZBEEdGV4dBEG0uXq8fIx' +
      'EQF4EQM1MzIRAXkRAjEw'
    Anchors = [akTop, akRight]
    Caption = 'URL'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object path: TLabel
    Left = 570
    Top = 50
    Width = 182
    Height = 16
    Cursor = crHandPoint
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVExpbmtMYWJlbBEGUEFSQU1TFAwRCGF2aXNpYmxlBREI' +
      'YWVuYWJsZWQFEQlmb250Y29sb3IKAP8AABEKaG92ZXJjb2xvcgb/EQpob3ZlcnN0' +
      'eWxlEQtmc1VuZGVybGluZREJaG92ZXJzaXplBgARAXcRAzE4MhEBaAxAOAAAAAAA' +
      'ABEGcGFyZW50FwVURm9ybRQGEQpjbGFzc19uYW1lDg4RDwAqAF9jb25zdHJhaW50' +
      'cxcQVFNpemVDb25zdHJhaW50cxQDDg8OEREEc2VsZgoGvfzAEQgAKgBwcm9wcxQA' +
      'EQcAKgBpY29uABEIACoAX2ZvbnQADhIKAV6yMA4TFAIOAwURCnBvc2l0aW9uZXgR' +
      'CnBvRGVzaWduZWQRBHRleHQRB9Hx++vq4DERAXgRAzU3MBEBeQYy'
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clBlue
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object label2: TLabel
    Left = 536
    Top = 50
    Width = 25
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgRAzUyOBEBeQYS'
    Anchors = [akTop, akRight]
    Caption = 'Path'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object label3: TLabel
    Left = 529
    Top = 26
    Width = 33
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgRAzI2NREBeQYy'
    Anchors = [akTop, akRight]
    Caption = 'Name'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object filename: TLabel
    Left = 570
    Top = 26
    Width = 182
    Height = 16
    Cursor = crHandPoint
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVExpbmtMYWJlbBEGUEFSQU1TFAwRCGF2aXNpYmxlBREI' +
      'YWVuYWJsZWQFEQlmb250Y29sb3IKAP8AABEKaG92ZXJjb2xvcgb/EQpob3ZlcnN0' +
      'eWxlEQtmc1VuZGVybGluZREJaG92ZXJzaXplBgARAXcRAzE4MhEBaAxAOAAAAAAA' +
      'ABEGcGFyZW50FwVURm9ybRQGEQpjbGFzc19uYW1lDg4RDwAqAF9jb25zdHJhaW50' +
      'cxcQVFNpemVDb25zdHJhaW50cxQDDg8OEREEc2VsZgoGvfzAEQgAKgBwcm9wcxQA' +
      'EQcAKgBpY29uABEIACoAX2ZvbnQADhIKAV6yMA4TFAIOAwURCnBvc2l0aW9uZXgR' +
      'CnBvRGVzaWduZWQRBHRleHQRB9Hx++vq4DERAXgRAzU3MBEBeQYa'
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clBlue
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object label5: TLabel
    Left = 318
    Top = 90
    Width = 4
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgIAQYRAXkGYg=='
    Alignment = taCenter
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object label4: TLabel
    Left = 538
    Top = 74
    Width = 24
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgRAzI1NhEBeQYy'
    Alignment = taRightJustify
    Anchors = [akTop, akRight]
    Caption = 'Size'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object size: TLabel
    Left = 570
    Top = 74
    Width = 182
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcRAzE4MhEBaAxAOAAAAAAAABEGcGFyZW50FwVURm9ybRQGEQpjbGFz' +
      'c19uYW1lDgkRDwAqAF9jb25zdHJhaW50cxcQVFNpemVDb25zdHJhaW50cxQDDgoO' +
      'DBEEc2VsZgoGvfzAEQgAKgBwcm9wcxQAEQcAKgBpY29uABEIACoAX2ZvbnQADg0K' +
      'AV6yMA4OFAIOAwURCnBvc2l0aW9uZXgRCnBvRGVzaWduZWQRBHRleHQRBtLl6vHy' +
      'MREBeBEDNTcwEQF5Bko='
    Anchors = [akTop, akRight]
    AutoSize = False
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
  end
  object label6: TLabel
    Left = 503
    Top = 170
    Width = 71
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgIAQcRAXkGYg=='
    Alignment = taRightJustify
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = 'Downloaded'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object loaded: TLabel
    Left = 591
    Top = 170
    Width = 47
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgG/xEBeQaa'
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object label7: TLabel
    Left = 503
    Top = 194
    Width = 71
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgG/xEBeQaa'
    Alignment = taRightJustify
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = 'Speed'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object speed: TLabel
    Left = 582
    Top = 194
    Width = 160
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcRAzE2MBEBaAxAOAAAAAAAABEGcGFyZW50FwVURm9ybRQGEQpjbGFz' +
      'c19uYW1lDgkRDwAqAF9jb25zdHJhaW50cxcQVFNpemVDb25zdHJhaW50cxQDDgoO' +
      'DBEEc2VsZgoGvfzAEQgAKgBwcm9wcxQAEQcAKgBpY29uABEIACoAX2ZvbnQADg0K' +
      'AV6yMA4OFAIOAwURCnBvc2l0aW9uZXgRCnBvRGVzaWduZWQRBHRleHQRBtLl6vHy' +
      'MREBeBEDNTgyEQF5BrI='
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object label9: TLabel
    Left = 503
    Top = 218
    Width = 71
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgG/xEBeQay'
    Alignment = taRightJustify
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = 'Else'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object time: TLabel
    Left = 582
    Top = 218
    Width = 160
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcRAzE2MBEBaAxAOAAAAAAAABEGcGFyZW50FwVURm9ybRQGEQpjbGFz' +
      'c19uYW1lDgkRDwAqAF9jb25zdHJhaW50cxcQVFNpemVDb25zdHJhaW50cxQDDgoO' +
      'DBEEc2VsZgoGvfzAEQgAKgBwcm9wcxQAEQcAKgBpY29uABEIACoAX2ZvbnQADg0K' +
      'AV6yMA4OFAIOAwURCnBvc2l0aW9uZXgRCnBvRGVzaWduZWQRBHRleHQRBtLl6vHy' +
      'MREBeBEDNTgyEQF5BrI='
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object label8: TLabel
    Left = 503
    Top = 146
    Width = 71
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgFesjAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQbS' +
      '5erx8jERAXgG/xEBeQaq'
    Alignment = taRightJustify
    Anchors = [akTop, akRight]
    AutoSize = False
    Caption = 'Status'
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object stat: TLabel
    Left = 582
    Top = 146
    Width = 160
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUCBEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcRAzE2MBEBaAxAOAAAAAAAABEGcGFyZW50FwVURm9ybRQGEQpjbGFz' +
      'c19uYW1lDgkRDwAqAF9jb25zdHJhaW50cxcQVFNpemVDb25zdHJhaW50cxQDDgoO' +
      'DBEEc2VsZgoGvfzAEQgAKgBwcm9wcxQAEQcAKgBpY29uABEIACoAX2ZvbnQADg0K' +
      'AV6yMA4OFAIOAwURCnBvc2l0aW9uZXgRCnBvRGVzaWduZWQRBHRleHQRBtLl6vHy' +
      'MREBeBEDNTgyEQF5BpI='
    Anchors = [akTop, akRight]
    Caption = ' '
    Font.Charset = DEFAULT_CHARSET
    Font.Color = clWindowText
    Font.Height = -13
    Font.Name = 'Tahoma'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object BAR: TMImage
    Left = 0
    Top = 0
    Width = 760
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVE1JbWFnZREGUEFSQU1TFAYRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQFEQF3DEBiAAAAAAAAEQFoDEBaAAAAAAAAEQZwYXJlbnQXBVRGb3JtFAYR' +
      'CmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFpbnRz' +
      'FAMOCQ4LEQRzZWxmCgkVxcARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBfZm9u' +
      'dAAODAoCSLyADg0UAQ4DBREEdGV4dBEMyOfu4fDg5uXt6OUx'
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
  end
  object LABEL: TLabel
    Left = 0
    Top = 0
    Width = 760
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEGVExhYmVsEQZQQVJBTVMUBhEIYXZpc2libGUFEQhhZW5h' +
      'YmxlZAURAXcMQFQAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEK' +
      'Y2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMU' +
      'Aw4JDgsRBHNlbGYKCRXFwBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250' +
      'AA4MCgJIvIAODRQBDgMFEQR0ZXh0EQfS5erx8jEw'
    Alignment = taCenter
    AutoSize = False
    Caption = 'Downloads Manager'
    Font.Charset = RUSSIAN_CHARSET
    Font.Color = clWhite
    Font.Height = -15
    Font.Name = 'Segoe UI Semilight'
    Font.Style = []
    ParentFont = False
    Layout = tlCenter
  end
  object loadedbar: TProgressBar
    Left = 648
    Top = 170
    Width = 96
    Height = 16
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEMVFByb2dyZXNzQmFyEQZQQVJBTVMUCBEIYXZpc2libGUF' +
      'EQhhZW5hYmxlZAURAXcMQGsAAAAAAAARAWgMQDgAAAAAAAARBnBhcmVudBcFVEZv' +
      'cm0UBhEKY2xhc3NfbmFtZQ4IEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3Ry' +
      'YWludHMUAw4JDgsRBHNlbGYKBRea0BEIACoAcHJvcHMUABEHACoAaWNvbgARCAAq' +
      'AF9mb250AA4MCgFbrsAODRQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0' +
      'ZXh0EQnP8O7j8OXx8TERCndpbmNvbnRyb2wEEQF5EQMxNDY='
    Anchors = [akTop, akRight]
    Smooth = True
    Step = 5
    TabOrder = 5
  end
  object url: TEdit
    Left = 570
    Top = 98
    Width = 182
    Height = 21
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEFVEVkaXQRBlBBUkFNUxQHEQhhdmlzaWJsZQURCGFlbmFi' +
      'bGVkBREBdxEDMTgyEQFoBhURBnBhcmVudBcFVEZvcm0UBhEKY2xhc3NfbmFtZQ4J' +
      'EQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4KDgwRBHNlbGYK' +
      'B+gLaBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4NCgFuw2AODhQC' +
      'DgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQF5BmIRAXgRAzU3MA=='
    Anchors = [akTop, akRight]
    ReadOnly = True
    TabOrder = 0
    Alignment = taLeftJustify
    ColorOnEnter = clNone
    FontColorOnEnter = clNone
    TabOnEnter = True
    MarginLeft = 0
    MarginRight = 0
  end
  object button1: TBitBtn
    Left = 504
    Top = 240
    Width = 120
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVEJpdEJ0bhEGUEFSQU1TFAcRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQFEQF3EQMxMjARAWgMQEAAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEKY2xh' +
      'c3NfbmFtZQ4JEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4K' +
      'DgwRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4N' +
      'CgFesjAODhQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQfK7e7v' +
      '6uAxEQF4EQMzNzY='
    Anchors = [akRight, akBottom]
    Caption = 'Open File'
    TabOrder = 1
  end
  object button2: TBitBtn
    Left = 630
    Top = 240
    Width = 122
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVEJpdEJ0bhEGUEFSQU1TFAgRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQFEQF3EQMxMjIRAWgMQEAAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEKY2xh' +
      'c3NfbmFtZQ4JEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4K' +
      'DgwRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4N' +
      'CgFesjAODhQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQfK7e7v' +
      '6uAxEQF4EQMxNzQRAXkGkA=='
    Anchors = [akRight, akBottom]
    Caption = 'Open Folder'
    TabOrder = 2
  end
  object button4: TBitBtn
    Left = 504
    Top = 304
    Width = 248
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVEJpdEJ0bhEGUEFSQU1TFAgRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQEEQF3EQMxMjARAWgMQEAAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEKY2xh' +
      'c3NfbmFtZQ4JEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4K' +
      'DgwRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4N' +
      'CgFesjAODhQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQfK7e7v' +
      '6uAxEQF4BmARAXkGkA=='
    Anchors = [akRight, akBottom]
    Caption = 'Delete from list'
    TabOrder = 3
  end
  object files: TListBox
    Left = 0
    Top = 24
    Width = 488
    Height = 304
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEIVExpc3RCb3gRBlBBUkFNUxQHEQhhdmlzaWJsZQURCGFl' +
      'bmFibGVkBREBdwxAYgAAAAAAABEBaAxAYgAAAAAAABEGcGFyZW50FwVURm9ybRQG' +
      'EQpjbGFzc19uYW1lDggRDwAqAF9jb25zdHJhaW50cxcQVFNpemVDb25zdHJhaW50' +
      'cxQDDgkOCxEEc2VsZgoGvfzAEQgAKgBwcm9wcxQAEQcAKgBpY29uABEIACoAX2Zv' +
      'bnQADgwKAV6yMA4NFAIOAwURCnBvc2l0aW9uZXgRCnBvRGVzaWduZWQRBHRleHQN' +
      'EQlpdGVtaW5kZXgRATA='
    Style = lbOwnerDrawFixed
    Anchors = [akLeft, akTop, akRight, akBottom]
    ItemHeight = 16
    TabOrder = 4
    Alignment = taLeftJustify
    BorderSelected = True
    TwoColor = clNone
    TwoFontColor = clNone
    MarginLeft = 2
    ReadOnly = False
  end
  object button3: TBitBtn
    Left = 504
    Top = 272
    Width = 248
    Height = 24
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEHVEJpdEJ0bhEGUEFSQU1TFAgRCGF2aXNpYmxlBREIYWVu' +
      'YWJsZWQFEQF3EQMxMjARAWgMQEAAAAAAAAARBnBhcmVudBcFVEZvcm0UBhEKY2xh' +
      'c3NfbmFtZQ4JEQ8AKgBfY29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4K' +
      'DgwRBHNlbGYKBr38wBEIACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4N' +
      'CgFesjAODhQCDgMFEQpwb3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0EQfK7e7v' +
      '6uAxEQF4EQM1MDQRAXkRAzI3Mg=='
    Anchors = [akRight, akBottom]
    Caption = 'Stop Downloading'
    TabOrder = 12
  end
  object addDownload: __TNoVisual
    Left = 112
    Top = 16
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEJVEZ1bmN0aW9uEQZQQVJBTVMUDBEIYXZpc2libGUFEQhz' +
      'aG93aGludAQRCHByaW9yaXR5BgARCnRvcmVnaXN0ZXIFEQZwYXJlbnQXBVRGb3Jt' +
      'FAYRCmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFp' +
      'bnRzFAMOCQ4LEQRzZWxmCgJBfXgRCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBf' +
      'Zm9udAAODAoBXrWgDg0UAg4DBREKcG9zaXRpb25leBEKcG9EZXNpZ25lZBEEdGV4' +
      'dA0RC29ubW91c2Vkb3duERZteURlc2lnbjo6b2JqTW91c2VEb3duEQ53b3JrYmFj' +
      'a2dyb3VuZAQRCnBhcmFtZXRlcnMRPiR1cmwsICRmaWxlLCAkcGF0aCwgJHNpemU9' +
      'J83l6Ofi5fHy7e4nLCAkYXV0b3N0YXJ0ID0gZmFsc2UgICAgEQVsYWJlbA0RA29i' +
      'ag0RBmlzc3luYwU='
    realWidth = 25
    realHeight = 25
  end
  object startDownload: __TNoVisual
    Left = 40
    Top = 16
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEJVEZ1bmN0aW9uEQZQQVJBTVMUDBEIYXZpc2libGUFEQhz' +
      'aG93aGludAQRCHByaW9yaXR5BgARCnRvcmVnaXN0ZXIFEQZwYXJlbnQXBVRGb3Jt' +
      'FAYRCmNsYXNzX25hbWUOCBEPACoAX2NvbnN0cmFpbnRzFxBUU2l6ZUNvbnN0cmFp' +
      'bnRzFAMOCQ4LEQRzZWxmCgUXmtARCAAqAHByb3BzFAARBwAqAGljb24AEQgAKgBf' +
      'Zm9udAAODAoBW67ADg0UAg4DBREKcG9zaXRpb25leBEKcG9EZXNpZ25lZBEEdGV4' +
      'dA0RC29ubW91c2Vkb3duERZteURlc2lnbjo6b2JqTW91c2VEb3duEQpwYXJhbWV0' +
      'ZXJzERUkZmlsZSwkdXJsLCRhdXRvc3RhcnQRDndvcmtiYWNrZ3JvdW5kBREFbGFi' +
      'ZWwNEQNvYmoNEQZpc3N5bmMF'
    realWidth = 25
    realHeight = 25
  end
  object updateInfo: __TNoVisual
    Left = 40
    Top = 72
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVEZ1bmNUaW1lchEGUEFSQU1TFAwRCGF2aXNpYmxlBREI' +
      'c2hvd2hpbnQEEQpiYWNrZ3JvdW5kBgARCHByaW9yaXR5BgARCGludGVydmFsEQM1' +
      'MDARBmVuYWJsZQQRBnBhcmVudBcFVEZvcm0UBhEKY2xhc3NfbmFtZQ4LEQ8AKgBf' +
      'Y29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4MDg4RBHNlbGYKBRea0BEI' +
      'ACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4PCgFbrsAOEBQCDgMFEQpw' +
      'b3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0DRELb25tb3VzZWRvd24RFm15RGVz' +
      'aWduOjpvYmpNb3VzZURvd24RBnJlcGVhdAURBWxhYmVsDREDb2JqDQ=='
    realWidth = 25
    realHeight = 25
  end
  object downStarter: __TNoVisual
    Left = 72
    Top = 144
    Width = 25
    Height = 25
    HelpType = htKeyword
    HelpKeyword = 
      'AAAAAhQCEQVDTEFTUxEKVEZ1bmNUaW1lchEGUEFSQU1TFAsRCGF2aXNpYmxlBREI' +
      'c2hvd2hpbnQEEQpiYWNrZ3JvdW5kBgARCHByaW9yaXR5BgARCGludGVydmFsEQMx' +
      'MDARBmVuYWJsZQQRBnBhcmVudBcFVEZvcm0UBhEKY2xhc3NfbmFtZQ4LEQ8AKgBf' +
      'Y29uc3RyYWludHMXEFRTaXplQ29uc3RyYWludHMUAw4MDg4RBHNlbGYKBr3qABEI' +
      'ACoAcHJvcHMUABEHACoAaWNvbgARCAAqAF9mb250AA4PCgBwL5AOEBQCDgMFEQpw' +
      'b3NpdGlvbmV4EQpwb0Rlc2lnbmVkEQR0ZXh0DRELb25tb3VzZWRvd24RFm15RGVz' +
      'aWduOjpvYmpNb3VzZURvd24RBWxhYmVsDREDb2JqDQ=='
    realWidth = 25
    realHeight = 25
  end
  object moveHide: __TNoVisual
    Left = 392
    Top = 112
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
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAIAEQF5Big='
    realWidth = 25
    realHeight = 25
  end
  object move: __TNoVisual
    Left = 360
    Top = 48
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
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAHYEQF5Big='
    realWidth = 25
    realHeight = 25
  end
  object moveShow: __TNoVisual
    Left = 336
    Top = 112
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
      'ak1vdXNlRG93bhEGcmVwZWF0BREFbGFiZWwNEQNvYmoNEQF4CAI4EQF5Big='
    realWidth = 25
    realHeight = 25
  end
end
