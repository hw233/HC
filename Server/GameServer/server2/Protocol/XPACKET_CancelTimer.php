<?php
/**
	Auto generated by xproto.exe
@author
	Dany
*/
require_once("XByteArray.php");


	class XPACKET_CancelTimer
	{
		    public static  $_m_xcmd/*:int*/=_EMSG_LocalInterface::CMSG_CancelTimer;

	    
		public $timerId/*:string utf-8*/="";

	    
	    public function XPACKET_CancelTimer()
		{
	
		}
			
		public static function _Size($timerId/*:string utf-8*/ )
		{
			$__xv	= 0;
			$i		=0;

            $__xv +=4;//LENGHT
            $__xv +=4;//_m_xcmd
            $__xv +=XByteArray::StringASize($timerId);

			return $__xv;
		}
				
		public static function _ToBuffer($__dst/*XByteArray*/,$timerId/*:string utf-8*/ )
		{
			$__xv	= 0;
			$i		=0;

			$__dst->writeInt32(XPACKET_CancelTimer::_Size($timerId/*:string utf-8*/ ));
			$__xv +=4;
			$__dst->writeInt32(XPACKET_CancelTimer::$_m_xcmd);
			$__xv +=4;

            //Write codes of timerId
            //
             $__xv += XByteArray::WriteStringA($__dst, $timerId);

			return $__xv;
		}
		
		public static function _ClassFromParameters($timerId/*:string utf-8*/ )
		{
			$_class = new XPACKET_CancelTimer();

            $_class->timerId=$timerId;
			
			return $_class;
		}


		public function FromBuffer($__src/*:XByteArray*/)
		{
			$__xv					= 0;
			$i						=0;
			$__xvBeanSize	=0;


            //Read codes of __xvtemp1
            //
            if($__src->getBytesAvailable()>=4)
            {
                $this->__xvtemp1=$__src->readInt32();
                $__xv +=4;
            }
            else
            {
                return 0;
            }

            //Read codes of __xvtemp2
            //
            if($__src->getBytesAvailable()>=4)
            {
                $this->__xvtemp2=$__src->readInt32();
                $__xv +=4;
            }
            else
            {
                return 0;
            }

            //Read codes of timerId
            //
            $__timerId_szSize	= new XInteger();
            $this->timerId =XByteArray::ReadStringA($__src,$__timerId_szSize);
            if($__timerId_szSize->_value<=0) 
                return 0;
            $__xv +=$__timerId_szSize->_value;

			return $__xv;
		}
		
		public function ToBuffer($__dst/*XByteArray*/)
		{
			return XPACKET_CancelTimer::_ToBuffer($__dst,$this->timerId );
		}
		
		public function Size()
		{
			return XPACKET_CancelTimer::_Size($this->timerId );
		}

    public  function FromXml(/*XP_XMLNODE_PTR*/ $pNode)
    {

        $this->timerId = XFROM_XML($this->timerId,$pNode,"timerId",2,"");

		  	return 0;
    }
    
    public  function   ToXml(/*XSTRING_STREAM & out*/)
    {
        $__xv_out="";

        $__xv_out .= XTO_XML($this->timerId,"timerId",2, 0);

        return $__xv_out;
    }
    
    public   function fromAMFObject($pNode)
    {
       
        
        $this->timerId = XFROM_AMFOBJECT($this->timerId,$pNode,"timerId",2,"");

        return 0;
    }
		
	private static function ParamDebugString($param)
    {
    	if (is_object($param))
    	{
    		return $param->ToDebugString();
    	}
    	else if (is_array($param))
    	{
    		$str = "(";
    		foreach($param as $p)
    		{
    			if( is_object($p) )
    			{
    				$str .= $p->ToDebugString().",";
			}
			else
			{
				$str .= strval($p).",";
			}
    		}
    		$str .= ")";
    		$str = str_replace(",)",")",$str);
    		return $str;
    	}
    	
    	return strval($param);
    } 
    
	public  function ToDebugString()
    {
    	if(XPACKET_CancelTimer::$_m_xcmd == _EMSG_ServerEvent::SMSG_OnSendZipData){
    		return "([ignore zip data])";
    	}
		
    	$__xv_out  = "(";
    	
        $__xv_out .= "timerId=".$this->ParamDebugString($this->timerId).",";

    	
    	$__xv_out  .= ")";
    	
    	$__xv_out = str_replace(",)",")",$__xv_out);
    	
    	return $__xv_out;
    }
    
   	public static function toAMFObject($__dst/*XByteArray*/,$timerId/*:string utf-8*/ )
		{
			$__xv	= 0;
			$i		=0;
      $obj = array();

        $obj["timerId"]=$timerId ;

      if(count($obj)>0)
      {
          $outBuffer  = WriteAMF3Object($obj);
          $__xv = strlen($outBuffer);
          $__xv+=8;
          $__dst->writeInt32($__xv);
          $__dst->writeInt32(XPACKET_CancelTimer::$_m_xcmd);
          $__dst->writeBinary($outBuffer,strlen($outBuffer));
      }
      else
      {
          $__xv =8;
          $__dst->writeInt32($__xv);
          $__dst->writeInt32(XPACKET_CancelTimer::$_m_xcmd);
      }
      
      
			return $__xv;
		}
	}
	
	
?>