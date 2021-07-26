#pragma classflags("forceupdate")
#pragma namespace("\\\\.\\root\\WMI")
//
// WPP Generated File
// PDB:  c:\src\ndtscdev.obj.x86chk\net\mpssvc\ipsec\spd\server\objchk\i386\ipsecsvc.pdb
// PDB:  Last Updated :2006-5-18:17:57:40:350 (UTC) [binplace]
//

//ModuleName = IpsecPolicyAgent	 (Init called in Function WPP_CONTROL_ANNOTATION)
[Dynamic,
 Description("Downlevel IPsec Service"),
 guid("{94335eb3-79ea-44d5-8ea9-306f49b3a040}"),
 locale("MS\\0x409")]
class IpsecPolicyAgent : EventTrace
{
    [Description ("Enable Flags"),
        ValueDescriptions{
             "TRC_FN_ENTER Flag",
             "TRC_FN_LEAVE Flag",
             "TRC_INFORMATION Flag",
             "TRC_WARNING Flag",
             "TRC_ERROR Flag"},
        DefineValues{
             "TRC_FN_ENTER",
             "TRC_FN_LEAVE",
             "TRC_INFORMATION",
             "TRC_WARNING",
             "TRC_ERROR"},
        Values{
             "TRC_FN_ENTER",
             "TRC_FN_LEAVE",
             "TRC_INFORMATION",
             "TRC_WARNING",
             "TRC_ERROR"},
        ValueMap{
             "0x00000001",
             "0x00000002",
             "0x00000004",
             "0x00000008",
             "0x00000010"}
    ]
    uint32 Flags;
};
                                                                                                                                                                                                                                                                                                                                                                                                                                                               