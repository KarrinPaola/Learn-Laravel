import { Head } from "@inertiajs/react";
import { Button } from "@headlessui/react";
import { CardContent, Card, CardHeader, CardTitle } from '@/components/ui/card';
import { Plus, Pencil, Trash2, CheckCircle2, XCircle } from "lucide-react";
import { Link } from "lucide-react";
import appLayout from "@/layouts/app-layout";
import { type BreadcrumbItem } from "@/types";
import { useState, useEffect } from "react";
import { Dialog, DialogContent, DialogHeader, DialogTitle, DialogTrigger } from "@/components/ui/dialog"
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label"
// import { Textarea } from "@/components/ui/textarea";
import { useForm } from "@inertiajs/react"
